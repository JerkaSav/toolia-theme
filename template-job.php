<?php
/*
Template Name: Job
*/
?>

<?php get_header() ?>
<?php

$args = array(
    'post_type' => 'job',
    'posts_per_page' => 4
);
$the_query = new WP_Query($args); ?>

<div class="container col-10 ">
    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5"><?php the_title() ?></h1>
    <?php get_template_part('/includes/sections', 'content'); ?>
    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5">Latest jobs</h1>

    <div class="d-flex flex-column flex-md-row row">
        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="post-excerpt card mb-3 col-md-5 m-3" style="min-height: 200px;">
                    <div class="card-body">
                        <h1 class="card-title blog-post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?> </a></h1>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <?php echo the_field('location', get_the_ID())   ?>
                        </p>

                    </div>
                </div>



            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>

        <?php endif; ?>
    </div>
    <a href="<?php echo get_post_type_archive_link('job') ?>"><button class="btn btn-outline-secondary rounded-pill" role="button">See all available positions</button></a>
</div>






<?php get_footer() ?>