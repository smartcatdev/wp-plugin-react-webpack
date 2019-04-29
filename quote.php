<?php
/**
 * Plugin name: Quote Form
 * Author: Smartcat
 */

namespace quote;

/**
 * Exit if accessed directly for security
 */
if( !defined( 'ABSPATH' ) ) {
    die;
}

const QUOTE_VERSION = '1.0.0';

/**
 * @since 1.0.0
 * @param string $path
 * @return string
 */
function get_plugin_path( $path = '' ) {
    return plugin_dir_path( __FILE__ ) . $path;
}

/**
 * @since 1.0.0
 * @param string $url
 * @return string
 */
function get_plugin_url( $url = '' ) {
    return plugin_dir_url( __FILE__ ) . $url;
}

add_action('wp_enqueue_scripts', 'quote\load_assets');
function load_assets(){
    wp_enqueue_script( 'quote-form-js', get_plugin_url( 'dist/build.js', __FILE__ ), array(), QUOTE_VERSION, true );
}