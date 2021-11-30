<?php
/*
Template Name: Contact
*/
get_header();
$img = get_field('hero_image');

?>
<section class="container">
  <img src="<?php echo $img['sizes']['large']; ?>" alt="Hero image" />
  <h2><?php the_title(); ?><?php var_dump($img); ?> </h2>
  <img <p class="mb-5"><?php get_template_part('/includes/sections', 'content'); ?></p>

</section>

<?php get_footer(); ?>