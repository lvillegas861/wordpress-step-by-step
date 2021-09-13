<?php

// custom logo theme support
add_theme_support( 'custom-logo' );

//customizer support

//custom logo

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