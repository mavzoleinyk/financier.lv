<?php
/**
 * Loans functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Loans
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function loa_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Loans, use a find and replace
		* to change 'loa' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'loa', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'loa' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'loa_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'loa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'loa_content_width', 640 );
}
add_action( 'after_setup_theme', 'loa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'loa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'loa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'loa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function loa_scripts() {
	wp_enqueue_style( 'loa-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'loa-style', 'rtl', 'replace' );
	wp_enqueue_style( 'loa-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'loa-animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'loa-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );
	wp_enqueue_style( 'loa-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'loa-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );
	wp_enqueue_style( 'loa-nice', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'loa-slick', get_template_directory_uri() . '/assets/css/slick.min.css' );
	wp_enqueue_style( 'loa-owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'loa-owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'loa-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );
	wp_enqueue_style( 'loa-odometer', get_template_directory_uri() . '/assets/css/odometer.min.css' );
	wp_enqueue_style( 'loa-themestyle', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'loa-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'loa-dark-style', get_template_directory_uri() . '/assets/css/dark-style.css' );

	wp_enqueue_script( 'loa-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-nice', get_template_directory_uri() . '/assets/js/nice-select.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-magnific', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-appear', get_template_directory_uri() . '/assets/js/appear.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-owl-carouse', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'loa-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	// wp_enqueue_script( 'loa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loa_scripts' );

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

