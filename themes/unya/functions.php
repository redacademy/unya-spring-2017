<?php
/**
 * UNYA Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UNYA_Theme
 */

if ( ! function_exists( 'unya_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function unya_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'sidebar' => esc_html( 'Sidebar Menu' )
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // unya_setup
add_action( 'after_setup_theme', 'unya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function unya_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unya_content_width', 640 );
}
add_action( 'after_setup_theme', 'unya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unya_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-success',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-categories',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unya_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function unya_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'unya_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function unya_scripts() {
	wp_enqueue_style( 'unya-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jquery-ui-css', '//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css' );
	wp_enqueue_script( 'jquery-ui-accordion', 'jquery-ui-accordion' , array('jquery'), false, true );
	wp_enqueue_script( 'font-awesome-cdn','https://use.fontawesome.com/828c02da95.js');
	wp_enqueue_script( 'unya-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'navigation-toggle', get_template_directory_uri() . '/build/js/navigation.min.js' , array('jquery', 'jquery-ui-accordion'), false, true );

	if ( is_page( 'impact' ) || 'is_home' || is_archive() || is_single() || is_page('native-youth-center')){
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/build/lib/slick.css');
	  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/build/lib/slick-theme.css');
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/build/lib/slick.js' , array('jquery'), false, true );
	  wp_enqueue_script( 'image-carousel', get_template_directory_uri() . '/build/js/image-carousel.min.js' , array('jquery'), false, true );
	}	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unya_scripts' );

function unya_page_template_redirect()
{
    if( is_singular('opportunities') )
    {
        wp_redirect( home_url('/get-involved') );
        exit();
    } else if( is_singular('calendar') )
    {
        wp_redirect( home_url() );
        exit();
    }
}
add_action( 'template_redirect', 'unya_page_template_redirect' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
