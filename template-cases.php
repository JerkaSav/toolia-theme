<?php
/*
Template Name: Cases
*/
get_header();
?>


<section class="container row justify-content-around">

  <h1 class="display-2 text-center">
    <?php the_title() ?>
  </h1>

  <p><?php get_template_part('/includes/sections', 'content'); ?></p>


  <?php
  // the query
  $the_query = new WP_Query(array('category_name' => 'cases')); ?>

  <?php if ($the_query->have_posts()) : ?>




    <!-- the loop -->
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
          <h5 class="card-title"><?php the_title(); ?> </h5>

          <p class="card-text"><?php the_excerpt(); ?></p>
          <a href="<?php echo the_permalink(); ?>" class="card-link"><?php the_title(); ?></a>
        </div>
      </div>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

</section>

<?php get_footer(); ?>