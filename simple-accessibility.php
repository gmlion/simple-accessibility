<?php
/*
Plugin Name: Simple Accessibility
Plugin URI: http://wpbakery.com/vc
Description: Show accessibility controls on top of the page
Version: 0.1
Author: Gianmarco Leone

License: GPLv2 or later

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function simpleAccessibility_style()
{
    wp_enqueue_style( 'simple-accessibility', plugins_url( 'simple_accessibility.css', __FILE__ ) );
}

function simpleAccessibility_script()
{
    wp_enqueue_script( 'simple-accessibility', plugins_url( 'simple_accessibility.js', __FILE__ ), array('jquery'), '', true );    
}
add_action( 'get_header', 'simpleAccessibility_style' );
add_action( 'get_footer', 'simpleAccessibility_script' );

include_once( 'accessibility_toolbar.php' );

add_shortcode('accessibility_toolbar', 'simpleAccessibility_shortcode');
?>