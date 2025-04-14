<?php
/**
 * DES Elementor Child functions and definitions
 *
 * @package DES_Elementor_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'DES_ELEMENTOR_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue child theme styles
 */
function des_elementor_child_enqueue_styles() {
	wp_enqueue_style(
		'des-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		['hello-elementor-theme-style'],
		DES_ELEMENTOR_CHILD_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'des_elementor_child_enqueue_styles', 20 );
