<?php
/*
Plugin Name: SSBruno Code Simple WP Plugin
Description: This is a boilerplate plugin to startup simple wordpress plugin projects.
Version: 1.0.0
Author: Bruno Santana Stefani
Author URI: https://ssbruno.com/
Text Domain: ssbruno-code-simple-wp
*/

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );
/**
 * Register the JavaScript and CSS for the public area.
 *
 */

function SSBcodePublicEnqueue() {
    wp_enqueue_style( 'ssbrunocodePublicStyles',  plugin_dir_url( dirname( __FILE__ )) . 'ssbcode-simple-wp-plugin/src/styles.css' );
    wp_enqueue_script( 'ssbrunocodePublicScript',  plugin_dir_url( dirname( __FILE__ )) . 'ssbcode-simple-wp-plugin/src/scripts.js' );		
}
add_action( 'wp_enqueue_scripts', 'SSBcodePublicEnqueue' );

function SSBcodeShortcode( $atts ) {
    $a = shortcode_atts( array(
        'name' => 'world'
     ), $atts );
     return 'Hello ' . $a['name'] . '!';
}
add_shortcode( 'helloworld', 'SSBcodeShortcode' );