<?php
get_header(); ?>
<section class="container">

  <h1><?php the_title() ?></h1>
  <?php get_template_part('/includes/sections', 'content'); ?>
</section>
<?php
get_footer();
