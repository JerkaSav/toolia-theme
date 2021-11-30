<?php get_header() ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <p><?php get_template_part('/includes/sections', 'content'); ?> </p>
</div>

<?php if (comments_open() || get_comments_number()) : comments_template() ?>
    <div class="container">
        <h3 class="mt-5">Comments</h3>
        <p class="comment-header"><?php printf(
                                        _nx('One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'toolia-theme'),
                                        number_format_i18n(get_comments_number()),
                                        '<span>' . get_the_title() . '</span>'
                                    ); ?></p>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 74,
            ));
            ?>
        </ol>
    </div>
<?php endif; ?>
<div class="container">
    <?php comment_form() ?>
</div>


<?php get_footer() ?>