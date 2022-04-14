<?php

// Sets up theme defaults and registers support for various WordPress features.
function followandrew_theme_supports()
{
    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Custom Logo
    add_theme_support('custom-logo');

    // Post Self image
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'followandrew_theme_supports');


// Register Menus
function followandrew_menus()
{
    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($location);
}

add_action('init', 'followandrew_menus');



// Register and Enqueue Styles.
function followandrew_register_styles()
{

    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('followandrew-style', get_template_directory_uri() . "/style.css", array("bootstrap"), $theme_version, "all");
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
}

add_action('wp_enqueue_scripts', 'followandrew_register_styles');

// Register and Enqueue Scripts.
function followandrew_register_scripts()
{

    wp_enqueue_script('jquery-3', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
    wp_enqueue_script('popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
    wp_enqueue_script('bootstrap-script', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
    wp_enqueue_script('followandrew-script', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}

add_action('wp_enqueue_scripts', 'followandrew_register_scripts');

// Register widget areas.
function followandrew_widget_areas(){

    register_sidebar(
        array(
            // 'before_title' => '<h2>',
            // 'after_title' => '</h2>',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</u>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area',
        )
    );


    register_sidebar(
        array(
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
        )
    );

}

add_action('widgets_init','followandrew_widget_areas');