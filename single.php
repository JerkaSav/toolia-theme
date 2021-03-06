<?php get_header() ?>
<?php $author_id = get_post_field('post_author')  ?>

<div class="container-md">
    <div class="breadcrumb mt-5">
        <?php get_breadcrumb() ?>
    </div>
    <h1 class="fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5"><?php the_title(); ?></h1>
    <p class="author-details text-muted">
        <em>by</em>
        <span class="text-uppercase author-meta-span"><?php the_author_meta('display_name', $author_id); ?></span>
        <em>on</em>
        <span class="author-meta-span"><?php echo get_the_date() ?></span>
    </p>
    <img style="width: 80%" class="fluid mx-auto" src="<?php the_post_thumbnail_url() ?>" alt="">
    <div class="col-12 col-lg-8 container">
        <p><?php get_template_part('/includes/sections', 'content'); ?> </p>
    </div>
</div>

<?php if (comments_open() || get_comments_number()) : comments_template() ?>
    <div class="container col-10 mt-5">
        <h3 class="comments-title mt-5">Comments</h3>
        <p class="comment-header"><?php printf(
                                        _nx('One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'toolia-theme'),
                                        number_format_i18n(get_comments_number()),
                                        '<span>' . get_the_title() . '</span>'
                                    ); ?></p>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'div',
                'short_ping'  => true,
                'avatar_size' => 54,
            ));
            ?>
        </ol>
    </div>

<?php endif; ?>
<div class="container col-10">
    <?php comment_form($args = array('title_reply' => 'Leave a comment')); ?>
</div>


<?php get_footer() ?>