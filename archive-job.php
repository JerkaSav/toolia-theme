<?php get_header(); ?>

<div class="container-md">
    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5">Available positions</h1>

    <div class="d-flex flex-column flex-md-row row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
</div>

<?php get_footer() ?>