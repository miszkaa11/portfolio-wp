<?php
/*
    Functions & Definitions
-------------------------------------
*/

// Asset version
if ( ! defined( '_ASSET_VER' ) ) {
    // Replace the version number of the theme on each release.
    define( '_ASSET_VER', '1.0.3' );
}

// Register nav menu
register_nav_menus(
	array(
		'menu-1' => esc_html__( 'Primary', 'michallukas' ),
	)
);

// Theme setup
function michallukas_setup() {

	//	Theme support
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support(
		'custom-background',
		apply_filters(
			'michallukas_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Register custom logo
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
add_action( 'after_setup_theme', 'michallukas_setup' );

// Register widget area
function michallukas_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'michallukas_widgets_init' );

// Theme scripts
function michallukas_scripts() {
    // Register jQuery
    if (!is_admin()) {
        // Deregister default jquery
        wp_deregister_script('jquery');
        // Register custom jquery
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '3.6.0', true);
        wp_enqueue_script('jquery');
    }

    // Main styles
    wp_enqueue_style('michallukas-main-styles', get_template_directory_uri() . "/assets/css/main.css", [], _ASSET_VER);
    // Default styles
    wp_enqueue_style( 'michallukas-style', get_stylesheet_uri(), array(), _ASSET_VER );
	// Font Awesome
	wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/5eef977532.js');

    // Scripts
    wp_enqueue_script('michallukas-jquery-scripts', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery'], _ASSET_VER);
	// Navigation
    wp_enqueue_script('michallukas-navigation-scripts', get_template_directory_uri() . '/assets/js/navigation.js', _ASSET_VER);
	// AOS
	wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css');
	wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', ['jquery']);

}
add_action( 'wp_enqueue_scripts', 'michallukas_scripts' );

// Splide slider
function enqueue_splide_assets() {
	// CSS
	wp_enqueue_style( 'michallukas-splide-cdn-styles', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', array(), null );
	// JS
	wp_enqueue_script( 'michallukas-splide-cdn-scripts', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', array(), null, true );
	wp_enqueue_script('michallukas-splide-scripts', get_template_directory_uri() . '/assets/js/splide.js', _ASSET_VER);
}
add_action( 'wp_enqueue_scripts', 'enqueue_splide_assets' );

// Register customizer
function michallukas_customize_preview_js() {
	wp_enqueue_script( 'michallukas-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _ASSET_VER, true );
}
add_action( 'customize_preview_init', 'michallukas_customize_preview_js' );

/*
    Require template extra files
-------------------------------------
*/

// Tools
require_once 'tools/utils.php';
require_once 'tools/arrow.php';
require_once 'tools/icons.php';
require_once 'tools/title.php';

// Custom template tags
require get_template_directory() . '/template-utils/template-tags.php';

// Jetpack setup
require get_template_directory() . '/template-utils/jetpack.php';

// Jetpack setup
require get_template_directory() . '/template-utils/customizer.php';

// Custom posts
require_once 'template-posts/gallery-posts.php';


