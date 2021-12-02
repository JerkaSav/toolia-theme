<?php get_header(); ?>

<div class="container-md">
    <h1 class="category-title fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5 text-capitalize">Category: <?php single_cat_title() ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=" post-excerpt card mb-3">
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