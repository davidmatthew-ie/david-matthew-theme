<?php
/**
 * Theme functions and definitions.
 *
 * @package David_Matthew_IE
 */

namespace DM\Theme;

/**
 * Set up theme defaults and register support for various WordPress features.
 */
function setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'david-matthew' ),
		)
	);

	// Switch default core markup to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'DM\Theme\setup' );

/**
 * Register widget area.
 */
function widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'david-matthew' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'david-matthew' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'DM\Theme\widgets_init' );

/**
 * Enqueue CSS.
 */
function enqueue_css() {
	wp_enqueue_style( 'fontawesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(), '5.11.2' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700,900&display=swap', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'david-matthew-ie', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'DM\Theme\enqueue_css' );

/**
 * Enqueue/dequeue scripts.
 */
function enqueue_js() {
	wp_enqueue_script( 'animejs', 'https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js', array(), '3.1.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'animejs' ), wp_get_theme()->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'DM\Theme\enqueue_js' );

// Retrieve the custom navigation walker class.
require 'classes/class-walker.php';
