<?php get_header() ?>

<div class="container col-10">

    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5"><?php the_title() ?></h1>

    <div class="blog-post-img-wrapper">
        <?php the_post_thumbnail('medium'); ?>
    </div>

    <p><?php get_template_part('/includes/sections', 'content'); ?> </p>
</div>
<?php get_footer() ?>