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

    function checkIfPostsHasImage() {
        if(get_the_post_thumbnail()){
            return the_post_thumbnail("medium", ["class" => "card-img-top img-fluid h-100"]);
        }
        else {
            return NULL;
        }
    }
?>
    
        <div class="d-flex mt-5 container">
            <div class="flex-grow-1">
                <h1 class="ps-5 pt-5 pb-4 h1"><?php echo $title ?></h1>
                <p class="text-wrap ps-5 ms-1" style="max-width: 40em;">
                    <?php echo $description ?>
                </p>
        </div>
        <div style="width: 30em; height: 20em; margin-top: 5em; margin-bottom: 4rem;">
            <img class="img-fluid rounded" src=<?php echo $image["url"] ?> alt=<?php echo $image["name"] ?> />
        </div> 
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php 
                // The Loop
                if ( $query->have_posts() ) : 
                while( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col">
                        <div class="card h-100 text-white bg-black">
                        <?php checkIfPostsHasImage() ?>
                            <div class="card-body d-flex flex-column">
                                <div class="mb-auto">
                                    <h4 class="card-title pt-2 pb-4 h4"> 
                                        <?php the_title(); ?> 
                                    </h4>
                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <a class="btn btn-light mt-auto mb-auto align-self-end shadow" 
                                role="button" 
                                href="<?php the_permalink(); ?>"
                                >
                                    Full post
                                </a>
                            </div>
                        </div>
                    </div>
    
                <?php endwhile; else: endif; ?>
                 </div>
                 </div> 
        
 



<?php get_footer(); ?>