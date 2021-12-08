<?php
    /** Needs Advanced custom fields plugin
     *  and fields:
     *      title (text),
     *      description (text area),
     *      frontpage_image (image),
     *      title2 (text),
     *      category (Taxonomy: Category , Appearance: Radio Button, Return Value: Term Object),
     *      animations (true/false),
     * */ 

    get_header();
    // gets the fields values
    $title = get_field("title");
    $title2 = get_field("title2");
    $description = get_field("description");
    $image = get_field("frontpage_image");
    $category = get_field("category");
    $animations = get_field("animations");
    // Gets the 3 latest posts from whatever category is in the category variable
    $query = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => $category->name  ) );
?>
        <div class="d-flex mt-5 mb-5 container">
            <div class="flex-grow-1">
                <h1 class="ps-sm-5 pt-sm-4 pb-sm-4 fp-h-b fp-h-top display-2<?php echo ($animations) ? ' animate' : ''?>">
                    <?php echo $title ?>
                </h1>
                <p class="text-wrap ps-sm-5 ms-sm-1 mt-4 fp-p-style<?php echo ($animations) ? ' animate' : ''?>">
                    <?php echo $description; ?>
                </p>
        </div>
        <div class="fp-img-container<?php echo ($animations) ? ' animate' : ''?>" >
            <img class="img-thumbnail rounded-3" src=<?php echo $image["url"] ?> alt=<?php echo $image["name"] ?> />
        </div> 
        </div>  
        <div class="container mt-5">
            <h1 class="ps-sm-5 pt-sm-4 pb-sm-4 fp-h-b display-1"><?php echo $title2 ?></h1>
            <div class="row mt-5 mb-5">
                <?php 
                // The Loop
                if ( $query->have_posts() ) : 
                while( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-md-4 col-small-screen">
                        <a class="text-black" href="<?php echo the_permalink()?>" >
                        <div class="card fp-card card-has-bg click-col" 
                            style="background-image:url(<?php echo get_the_post_thumbnail_url()?>);">
                            <img class="card-img d-none" src="<?php echo get_the_post_thumbnail_url() ?>" 
                            alt="<?php echo str_replace(' ', '-', get_the_title()) . "-img"  ?>">
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