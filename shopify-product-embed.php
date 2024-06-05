<?php
/*
Plugin Name: Shopify Product Embed
Description: Embed Shopify products using shortcodes on WordPress.
Version: 1.0
Author: eraosa.com
*/

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants for plugin paths
define( 'SPE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
require_once SPE_PLUGIN_DIR . 'includes/shopify-product-embed-scripts.php';
require_once SPE_PLUGIN_DIR . 'includes/shopify-product-embed-shortcode.php';

// Enqueue CSS and Google Fonts
function enqueue_shopify_styles() {
    wp_enqueue_style( 'shopify-product-embed', SPE_PLUGIN_URL . 'assets/css/shopify-product-embed.css' );
    wp_enqueue_style( 'shopify-product-embed-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'enqueue_shopify_styles' );
?>
