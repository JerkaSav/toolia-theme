<?php
    get_header();
    $query = new WP_Query( array( 'posts_per_page' => 3, 'category_name' => 'cases'  ) ); 
?>
<div class="container">
    <div class="row g-4">
    <div class="container">
        <div class="row" style="gap: 0.5em;">
        <?php 
    if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
       <div class="col">
            <div class="card" style="width: 18rem; height: 100%;">
                <div class="card-body d-flex flex-column">
                    <div class="mb-auto">
                        <h4 class="card-title pt-2 pb-4"> 
                            <?php the_title(); ?> 
                        </h4>
                        <div class="custom-link card-text">
                            <?php the_excerpt(); ?>
                    </div>
                </div>
                <a class="btn btn-secondary align-self-end mt-4" href="<?php the_permalink(); ?>">
                    Full post
                </a>
                </div>
            </div>
        </div>
    
    <?php endwhile; else: endif; ?>
    <div> 
    <div class="d-flex">
        <div class="flex-grow-1">
        <h1 class="p-3">Some text about the company</h1>
        <p class="text-wrap p-3" style="width: 30em;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem laborum,
             repudiandae fuga blanditiis repellendus aut? Labore cum, aperiam quaerat veritatis doloribus,
             nulla accusantium autem iste facere, quo eligendi laboriosam sunt?
        </p>
        </div>

       
      <div class="text-wrap" style="width: 30em; height: 20em; border: 1px solid black; margin-top: 6em;">
          This will be an image
        </div>  
    </div>
    </div>
    </div>
    </div> 
 </div>

<?php get_footer(); ?>