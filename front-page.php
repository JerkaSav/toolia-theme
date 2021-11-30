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
        <div class="d-flex mt-5 mb-5 container">
            <div class="flex-grow-1">
                <h1 class="ps-sm-5 pt-sm-4 pb-sm-4 fp-h-b"><?php echo $title ?></h1>
                <p class="text-wrap ps-sm-5 ms-sm-1 mt-4 fp-p-style" style="max-width: 40em;">
                    <?php echo $description; ?>
                </p>
        </div>
        <div class="d-none d-sm-block" style="width: 30em; height: 20em; margin-top: 15rem; margin-bottom: 4rem;" >
            <img class="img-fluid rounded-3 shadow" src=<?php echo $image["url"] ?> alt=<?php echo $image["name"] ?> />
        </div> 
        </div>
        <div class="container mt-5">
            <h1 class="ps-sm-5 pt-sm-4 pb-sm-4 fp-h-b">Cases</h1>
            <div class="row mt-5 mb-5">
                <?php 
                // The Loop
                if ( $query->have_posts() ) : 
                while( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-md-4">
                        <a class="text-black" href="<?php echo the_permalink()?>" >
                        <div class="card fp-card card-has-bg click-col" 
                            style="background-image:url(<?php echo get_the_post_thumbnail_url()?>);">
                            <img class="card-img d-none" src="<?php echo get_the_post_thumbnail_url() ?>" alt="abc">
                            <div class="card-img-overlay d-flex flex-column">
                                <div class="card-body">
                                    <small class="card-meta mb-2"> <?php echo get_the_excerpt(); ?></small>
                                    <h4 class="card-title mt-0 display-4"><?php the_title(); ?></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                <?php endwhile; else: endif; ?>
                 </div>
                 </div> 
        
 



<?php get_footer(); ?>