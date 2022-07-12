<?php
/**
 * KYRIC STUDIO_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KYRIC_STUDIO_theme
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
function kyric_studio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on KYRIC STUDIO_theme, use a find and replace
		* to change 'kyric-studio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'kyric-studio', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'kyric-studio' ),
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
			'kyric_studio_custom_background_args',
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
add_action( 'after_setup_theme', 'kyric_studio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kyric_studio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kyric_studio_content_width', 640 );
}
add_action( 'after_setup_theme', 'kyric_studio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kyric_studio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kyric-studio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kyric-studio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kyric_studio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kyric_studio_scripts() {
	// wp_enqueue_style('kyric-studio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style('icon', get_template_directory_uri() . '/assets/css/fontello.css', array(), _S_VERSION );
	wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet', false);
	add_action( 'wp_enqueue_scripts', 'open-sans' );
	wp_enqueue_style('noto-sans-tc', 'https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700&display=swap" rel="stylesheet', false);
	add_action( 'wp_enqueue_scripts', 'noto_sans_tc' );
	wp_enqueue_style('justified-gallery', get_template_directory_uri() . '/assets/css/justifiedGallery.css', array(), _S_VERSION );
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');

	// wp_register_style( 'animation', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array());
	// wp_enqueue_style( 'animation' );  有做過修改-animation.css 只寫入fadeInTop 動畫
	wp_style_add_data('kyric-studio-style', 'rtl', 'replace' );

	wp_enqueue_script('kyric-studio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_deregister_script('jquery'); // remove standard jquery
	wp_register_script('jquery3.6', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
	wp_enqueue_script('jquery3.6');
	wp_register_script('three', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', null, null, true );
	wp_enqueue_script('three');
	wp_register_script('gsap', 'https://unpkg.co/gsap@3/dist/gsap.min.js', null, null, true );
	wp_enqueue_script('gsap');
	// wp_enqueue_script('ripple-effect', get_template_directory_uri() . '/assets/js/ripple-effect.js', array(), _S_VERSION, true);
	// wp_register_script('ripple-effect', 'https://unpkg.com/ripple-hover-effect@1.0.0/src/ripple-effect.js', null, null, true );
	// wp_enqueue_script('ripple-effect');
	wp_enqueue_script('justified-gallery-js', get_template_directory_uri() . '/assets/js/jquery.justifiedGallery.js', array(), _S_VERSION, true);
	wp_register_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', null, null, true );
	wp_enqueue_script('wow');
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true);
	// wp_register_script('magnific-popup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', null, null, true );
	// wp_enqueue_script('magnific-popup');

	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kyric_studio_scripts' );

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