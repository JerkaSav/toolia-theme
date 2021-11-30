<?php get_header(); ?>

<?php
// TODO make sure the category ID corresponds to 'cases'
$args = array(
    'category__not_in' => array(3),
    // 'category_name' => 'cases'
);
$the_query = new WP_Query($args);
?>

<div class="container-md bg-white py-3 col-10 my-3 rounded">
    <h1 class="text-center">Blog</h1>


    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="post-excerpt container-md mb-3">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail('thumbnail'); ?>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php echo the_permalink(); ?>">Read more</a>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

    <?php endif; ?>
</div>

<?php get_footer() ?>