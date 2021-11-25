<?php
    /** Needs Advanced custom fields plugin
     *  and fields:
     *      title (text),
     *      description (text),
     *      frontpage_image (image)
     * */ 

    get_header();
    // gets the fields values
    $title = get_field("title");
    $description = get_field("description");
    $image = get_field("frontpage_image");
    // Gets the 3 latest posts from category cases
    $query = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'cases'  ) ); 
?>
<div class="container">
    <div class="row g-4 mt-5">
        <div class="container">
            <div class="row card-group" style="gap: 0.5em;">
                <?php 
                // The Loop
                if ( $query->have_posts() ) : 
                while( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col">
                        <div class="card text-white bg-dark">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-auto">
                                    <h4 class="card-title pt-2 pb-4"> 
                                        <?php the_title(); ?> 
                                    </h4>
                                    <div class="custom-link card-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <a class="btn btn-light align-self-end mt-4" 
                                role="button" 
                                href="<?php the_permalink(); ?>"
                                >
                                    Full post
                                </a>
                            </div>
                        </div>
                    </div>
    
                <?php endwhile; else: endif; ?>
    <div> 
        <div class="d-flex mt-5">
            <div class="flex-grow-1">
                <h1 class="p-3"><?php echo $title ?></h1>
                <p class="text-wrap p-3" style="width: 30em;">
                    <?php echo $description ?>
                </p>
        </div>
      
        <div style="width: 30em; height: 20em; margin-top: 6em; margin-bottom: 6rem;">
            <img class="img-fluid rounded" src=<?php echo $image["url"] ?> alt=<?php echo $image["name"] ?> />
        </div>  
    </div>
    </div>
    </div>
    </div> 
</div>

<?php get_footer(); ?>