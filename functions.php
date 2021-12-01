<?php

function add_theme_scripts(): void
{
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/bootstrap/css/bootstrap.min.css");
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_script("script", get_template_directory_uri() . "/script.js");
}

add_action("wp_enqueue_scripts", "add_theme_scripts");

if (!function_exists('themeSetup')) :

    function themeSetup()
    {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        register_nav_menus(
            array(
                'primary-menu' => 'Main menu location',

            )
        );
    }

endif;
add_action('after_setup_theme', 'themeSetup');

if (!defined('THEME_IMG_PATH')) {
    define('THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets');
}

// Adds search box to nav menu programatically
function add_search_box($items, $args)
{
    $items .= '<li>' . get_search_form(false) . '</li>';
    return $items;
}


add_filter('wp_nav_menu_items', 'add_search_box', 10, 2);

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more)
{
    global $post;
    return '<a class="moretag" href="' . get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Get breadcrumb menu on post (single) pages
function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
        echo the_category('<span class="crumb-separator"> &nbsp; // &nbsp; </span>');
        if (is_single()) {
            echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
            the_title("<span class='text-muted crumb-title'>", "</span>");
        }
        // Uncomment the code below if you want to call get_breadcrumb() on pages (About, Contact etc.) also.

        // elseif (is_page()) {
        //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        //     echo the_title();
        // } elseif (is_search()) {
        //     echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        //     echo '"<em>';
        //     echo the_search_query();
        //     echo '</em>"';
        // }
    }
}
