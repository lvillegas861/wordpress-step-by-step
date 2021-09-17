<?php
// theme files
function theme_files() {
	// styles
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css');

	// scripts
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',true, true );
}
add_action('wp_enqueue_scripts', 'theme_files');

// theme support
// custom logo customizer support
add_theme_support( 'custom-logo' );

// Title Tag Support
add_theme_support( 'title_tag' );

// featured image
add_theme_support('post-thumbnails');

//custom logo customizer support-set height and width
function basicwptheme_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'basicwptheme_custom_logo_setup' );

function theme_prefix_the_custom_logo() {
    if( function_exists('the_custom_logo') ) {
        the_custom_logo();
    }
}


// add HTML theme support for search bar
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


// Registering side bar and widgets
function custom_widgets() {

	register_sidebar( array(
		'name'          => 'Home Banner Slider',
		'id'            => 'home_banner_slider',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_sidebar',
		'before_widget' => '<div class="sidebar"',
		'after_widget'  => '</div>',
		'before_title'  => 'h3',
		'after_title'   => 'h3',
	) );

    register_sidebar( array(
		'name'          => 'Home Footer Widgets',
		'id'            => 'home_footer_widgets',
		'before_widget' => '<aside class="footer_widget"',
		'after_widget'  => '</aside>',
		'before_title'  => 'h4',
		'after_title'   => 'h4',
	) );

}
                // hook...   name 
add_action( 'widgets_init', 'custom_widgets' );