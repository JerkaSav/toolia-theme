<?php get_header(); ?>

<?php
// TODO make sure the category ID corresponds to 'cases'
$args = array(
    'category__not_in' => array(3),
    // 'category_name' => 'cases'
);
$the_query = new WP_Query($args);
?>

<div class="container-md">
    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5">Blog</h1>


    <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="post-excerpt card mb-3">
                <div class="card-body">
                    <h1 class="card-title blog-post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?> </a></h1>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p><?php the_excerpt(); ?></p>

                </div>
            </div>

        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

    <?php endif; ?>
</div>

<?php get_footer() ?>