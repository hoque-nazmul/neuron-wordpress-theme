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


/*
    Meta Box Support using CMB 2
*/
require (get_template_directory().'/inc/metabox/init.php');

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'single_meta',
		'title'         => __( 'My Metabox', 'cmb2' ),
		'object_types'  => array( 'portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Subtitle text field
	$cmb->add_field( array(
		'name'       => __( 'Preview Image', 'cmb2' ),
		'id'         => 'preview_image',
		'type'       => 'file',
    ) );

	// Subtitle text field
	$cmb->add_field( array(
		'name'       => __( 'Sub Title', 'cmb2' ),
		'id'         => 'sub_title',
		'type'       => 'text',
    ) );
    
	// Link text field
	$cmb->add_field( array(
		'name' => __( 'Link Text', 'cmb2' ),
		'id'   => 'single_link_text',
        'type' => 'text',
        'default' => 'Visit Website',
    ) );
    
    // Link Url
    $cmb->add_field( array(
		'name' => __( 'Link URL', 'cmb2' ),
		'id'   => 'single_link_url',
		'type' => 'text_url',
	) );

    // Add other metaboxes as needed

}

add_action( 'cmb2_admin_init', 'groupInput' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function groupInput() {
	$prefix = 'group_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'meta',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'portfolio' ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'demo',
		'type'        => 'group',
		'options'     => array(
			'group_title'    => esc_html__( 'Information {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Information Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Information Value', 'cmb2' ),
		'id'          => 'value',
		'type'        => 'text',
    ) );
    
    

}

/* ====================== END CMB2 Meta Box Configuaration ========================= */






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

    // Add Custom Image sizing support
    add_image_size( 'neuron-blog-image', 740, 260, true );

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
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'Feature',
        array(
            'labels' => array(
                'name' => __( 'Features' ),
                'singular_name' => __( 'Feature' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'Service',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolios' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true
        )
    );
}

add_filter( 'widget_text', 'do_shortcode' );

// Register Widget Area
function neuron_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'neuron' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Footer One widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'neuron' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Footer tow widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'neuron' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Footer three widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'neuron' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Footer Four widgets here.', 'neuron' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'neuron_widgets_init' );

function post_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <li>
            '.get_the_post_thumbnail($idd, 'thumbnail').'
            <p><a href="'.get_the_permalink().'">'.get_the_title().'</a></p>
            <span>'.get_the_date('d F Y', $idd).'</span>
        </li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_post', 'post_list_shortcode');     
    

