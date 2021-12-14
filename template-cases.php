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
$case_helped_with = get_field('case_helped_with');
$token = strtok($case_helped_with, ", ");
?>



<section class="container" id="cases-container">
  <div class="row w-100">
    <div class="col-6 align-self-center">

      <ul class="list-unstyled ">

        <li class="fs-4">
          ✨ 5433 Projects completed
        </li>
        <li class="fs-4">
          ⭐ 201 Collaborations
        </li>
        <li class="fs-4">
          ✨ 15 Years in the industry
        </li>
        <li class="fs-4">
          ⭐ 3421 Consultants
        </li>

      </ul>
    </div>
    <div class=" col-6">

      <img class="img-fluid " src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
    </div>
  </div>
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

    <div class="row justify-content-around my-5">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="card shadow-lg border-0 mt-5 " style="width: 18rem;">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="..." style="max-height: 200px; height:100%; object-fit:contain;">
          <div class="card-body column justify-content-between ">
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

  <div class="card mb-3 mx-auto shadow-lg border-0" style="margin-top: 6rem">
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

        <div class=" rounded card-footer bg-transparent  border-0 color-succes"><?php
                                                                                while ($token !== false) {
                                                                                  echo "✔️ $token ";
                                                                                  $token = strtok(", ");
                                                                                }
                                                                                ?></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>