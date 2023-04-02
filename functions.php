<?php
/**
 * The required functions theme file
 *
 * Don't expect much in here.
 *
 * @package wpmb
 * @added 2023-04-02
 */

// [] Make this a plugin.
/**
 * Remove Gutenberg/FSE cruft
 *
 * Based on:
 *
 * @link https://fullsiteediting.com/lessons/how-to-remove-default-block-styles/#h-how-to-remove-the-inline-styles-on-the-front
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return void
 */
function wpmb_remove_core_block_styles() {

	wp_dequeue_style( 'wp-block-columns' );
	wp_dequeue_style( 'wp-block-column' );
	wp_dequeue_style( 'global-styles' );

	global $wp_styles;

	foreach ( $wp_styles->queue as $key => $handle ) {
		if ( strpos( $handle, 'wp-block-' ) === 0 ) {
			wp_dequeue_style( $handle );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'wpmb_remove_core_block_styles' );

/**
 * Theme setup
 *
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return void
 */
function wpmb_theme_setup() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), false, filemtime( 'style.css' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'main'   => __( 'Main Menu', 'wpmb' ),
			'footer' => __( 'Footer Menu', 'wpmb' ),
		)
	);

}
add_action( 'after_setup_theme', 'wpmb_theme_setup' );
