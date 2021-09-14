<?php
// theme support


// custom logo customizer support
add_theme_support( 'custom-logo' );

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

}
                // hook...   name 
add_action( 'widgets_init', 'custom_widgets' );