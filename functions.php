<?php
/**
 * Travelly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Travelly
 */

if ( ! function_exists( 'travelly_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function travelly_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Travelly, use a find and replace
		 * to change 'travelly' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'travelly', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1200, 9999 );
		add_image_size( 'small-thumbnail', 400, 400 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Primary', 'travelly' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'travelly_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'travelly_setup' );


/**
 * Enqueue scripts and styles.
 */
function travelly_scripts() {

	// Add google fonts
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400&display=swap', array(), '' );

	// Add bootstrap css
	wp_enqueue_style( 'bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '' );

	// Add google fonts
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(), '' );

	// Add style.css
	wp_enqueue_style( 'travelly-style', get_stylesheet_uri() );

	// Add jquery
	wp_enqueue_script('jquery');

	// Add pooperjs
	wp_enqueue_script( 'pooperjs', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '20151215', true );

	// Add bootstrapjs
	wp_enqueue_script( 'bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '20151216', true );

	// Add TweenMaxjs
	wp_enqueue_script( 'TweenMaxjs', '//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js', array('jquery'), '20151217', true );

	// Add mainjs
	wp_enqueue_script( 'travelly-mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '20151218', true );

	// Add comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'travelly_scripts' );