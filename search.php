<?php get_header(); ?>

<?php
$s = get_search_query();
$args = array(
    's' => $s
);
// The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) { ?>
    <div class="container">
        <?php
        _e("<h1  class='fp-h-b ps-sm-5 pt-sm-4 pb-sm-4 my-5' >Search results for: " . get_query_var('s') . "</h1>");
        while ($the_query->have_posts()) {
            $the_query->the_post();
        ?>

            <div class="post-excerpt card mb-3">
                <div class="card-body">
                    <h1 class="card-title blog-post-title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?> </a></h1>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <p><?php the_excerpt(); ?></p>

                </div>
            </div>



        <?php
        } ?>
    </div>
<?php
} else {
?>
    <div class="container-md">
        <h1>No results</h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    </div>

<?php } ?>

<?php get_footer(); ?>