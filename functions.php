<?php

function neuron_theme_files()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), 1.0, 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), 1.0, 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 1.0, 'all');
    wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), 1.0, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), 1.0, 'all');

    wp_enqueue_style('neuron_style', get_stylesheet_uri());


    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), 1.0, true);
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 1.0, true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), 1.0, true);
    wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), 1.0, true);
    wp_enqueue_script('neuron_script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 1.0, true);
}
add_action('wp_enqueue_scripts', 'neuron_theme_files');

function neuron_theme_supports()
{
    load_theme_textdomain('neuron', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
    */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
    */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'neuron' ),
    ) );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action('after_setup_theme', 'neuron_theme_supports');


add_action( 'init', 'neuron_theme_custom_post' );
function neuron_theme_custom_post() {
    register_post_type( 'Slide',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => true
        )
    );
}

