<?php
/*
Template Name: Cases
*/
get_header();
$title = get_field('casetitel');
$img = get_field('case_img');
$case_titel = get_field('case_titel');
$text = get_field('case_text');
$case_author = get_field('case_author');
?>



<section class="container">

  <?php if ($title) : ?>
    <h1 class="display-2 text-center mt-5"><?php echo $title; ?></h1>
  <?php else : ?>
    <h1 class="display-2 text-center mt-5">Uppdrag vi har gjort</h1>
  <?php endif; ?>



  <div class="mx-auto" style="max-width: 40rem;">
    <p class="mb-5"><?php get_template_part('/includes/sections', 'content'); ?></p>
  </div>


  <?php
  // the query
  $the_query = new WP_Query(array('category_name' => 'cases')); ?>

  <?php if ($the_query->have_posts()) : ?>


    <!-- the loop -->

    <div class="row justify-content-between my-5">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="card shadow-lg border-0" style="width: 18rem;">
          <div class="card-body ">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
            <h5 class="card-title"><?php the_title(); ?> </h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php echo the_permalink(); ?>" class="card-link">Läs mer</a>
          </div>
        </div>

      <?php endwhile; ?>
    </div>

    <!-- end of the loop -->

    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <div class="card mb-3 mx-auto shadow-lg border-0" style="">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo $img['sizes']['large']; ?>" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-8 p-4 my-auto">
        <div class="card-body ">
          <h5 class="card-title"><?php echo $case_titel ?></h5>
          <p class="card-text">"<?php echo $text ?>"</p>
          <p class="card-text"><small class="text-muted"><?php echo $case_author ?></small></p>

        </div>
        <div class="card-footer bg-transparent shadow-sm border-0 color-succes">Ökad försäljning - Google Ads - SEO - Wordpress</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>