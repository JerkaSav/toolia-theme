<?php get_header(); ?>

<?php
$s = get_search_query();
$args = array(
    's' => $s
);
// The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    _e("<h1 class='container-md text-center' >Search results for: " . get_query_var('s') . "</h1>");
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>
        <div class="container-md">
            <hr>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt() ?></p>

        </div>

    <?php
    }
} else {
    ?>
    <div class="container-md">
        <h1>No results</h1>
        <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    </div>

<?php } ?>

<?php get_footer(); ?>