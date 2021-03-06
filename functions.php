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
                'footer-menu' => 'Footer menu location',
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
    if ($args->theme_location == 'primary-menu') {
        $items .= '<li>' . get_search_form(false) . '</li>';
    }
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
    echo '<a href="' . home_url() . '" rel="nofollow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
  </svg></a>';
    if (is_category() || is_single()) {
        echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
        echo the_category('<span class="crumb-separator"> &nbsp; / &nbsp; </span>');
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
function get_job_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
    echo '<a href="' . get_permalink(get_page_by_path('career')) . '" rel="nofollow">Career</a>'; // page slug needs to be 'career'
    if ('job' == get_post_type()) {
        echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
        if (is_single()) {

            echo "<span class='text-muted crumb-title text-capitalize'>" . get_post_type() . "</span>";
            echo "<span class='crumb-separator'>&nbsp;&#187;&nbsp;</span>";
            the_title("<span class='text-muted crumb-title'>", "</span>");
        }
    }
}


function toolia_register_post_type()
{
    $labels = array(
        'name' => __('Jobs', 'toolia'),
        'singular_name' => __('Job', 'toolia'),
        'add_new' => __('New Job', 'toolia'),
        'add_new_item' => __('Add New Job', 'toolia'),
        'edit_item' => __('Edit Job', 'toolia'),
        'new_item' => __('New Job', 'toolia'),
        'view_item' => __('View Jobs', 'toolia'),
        'search_items' => __('Search Jobs', 'toolia'),
        'not_found' =>  __('No Jobs Found', 'toolia'),
        'not_found_in_trash' => __('No jobs found in Trash', 'toolia'),
    );

    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array('category'),
        'rewrite'   => array('slug' => 'job'),
        'show_in_rest' => true
    );

    register_post_type('job', $args);
}
add_action('init', 'toolia_register_post_type');

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

add_action('widgets_init', 'toolia_widgets_init');
function toolia_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Footer Text-area', 'toolia'),
        'id'            => 'footer-text-area',
        'before_widget' => '<div class="col-md-4 mb-0 text-muted">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
