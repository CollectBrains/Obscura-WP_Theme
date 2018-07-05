<?php
/**
 * obscura functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package obscura
 */

if ( ! function_exists( 'obs_setup' ) ) :

	function obs_setup() {

		load_theme_textdomain( 'obs', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'obs' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'obs_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'obs_setup' );


function obs_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'obs_content_width', 640 );
}
add_action( 'after_setup_theme', 'obs_content_width', 0 );

function obs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'obs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'obs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'obs_widgets_init' );

function obs_scripts() {

    wp_enqueue_style('obs-media', get_template_directory_uri() . '/assets/css/media-queries.css');

    wp_enqueue_style('obs-ie9', get_template_directory_uri() . '/assets/css/ie9.css');
    wp_style_add_data( 'obs-ie9', 'conditional', 'lt IE 9' );

    wp_enqueue_style('obs-ie8', get_template_directory_uri() . '/assets/css/ie8.css');
    wp_style_add_data( 'obs-ie8', 'conditional', 'lt IE 8' );

    wp_enqueue_style('obs-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700');

    wp_enqueue_style( 'obs-style', get_stylesheet_uri() );



	wp_enqueue_script( 'obs-jquery', get_template_directory_uri() . 'assets/js/jquery-1.7.2.min.js', array(), '20151215', true );

    wp_enqueue_script( 'obs-ddsmoothmenu', get_template_directory_uri() . 'assets/js/ddsmoothmenu.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-retina', get_template_directory_uri() . 'assets/js/retina.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-selectnav', get_template_directory_uri() . 'assets/js/selectnav.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-masonry', get_template_directory_uri() . 'assets/js/jquery.masonry.min.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-fitvids', get_template_directory_uri() . 'assets/js/jquery.fitvids.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-backstretch', get_template_directory_uri() . 'assets/js/jquery.backstretch.min.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-mediaelement', get_template_directory_uri() . 'assets/js/mediaelement.min.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-mediaelementplayer', get_template_directory_uri() . 'assets/js/mediaelementplayer.min.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-dcflickr', get_template_directory_uri() . 'assets/js/jquery.dcflickr.1.0.js', array('obs-jquery'), '20151215', true );

    wp_enqueue_script( 'obs-twitter', get_template_directory_uri() . 'assets/js/twitter.min.js', array('obs-jquery'), '20151215', true );

	wp_enqueue_script( 'obs-scripts', get_template_directory_uri() . 'assets/js/scripts.js', array('obs-jquery'), '20151215', true );

	wp_enqueue_script( 'obs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'obs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'obs_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

