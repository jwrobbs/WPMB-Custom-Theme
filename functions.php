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

/**
 * Enqueue theme style
 *
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return void
 */
function wpmb_enqueue_theme_style() {
	wp_enqueue_style(
		'style',
		get_stylesheet_uri(),
		false,
		filemtime( get_stylesheet_directory() . '/style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'wpmb_enqueue_theme_style' );

// [] convert to more reusable plugin.
/**
 * Show pages in footer
 *
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return void
 */
function wpmb_get_footer_pages() {
	echo '<h3>Pages</h3>';
	wp_nav_menu(
		array(
			'theme_location' => 'footer',
			'items_wrap'     => '<ul role="list" id="menu-footer-menu" class="menu">%3$s</ul>',
		)
	);
}
/**
 * Show cats in footer
 *
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return string
 */
function wpmb_get_footer_categories() {
	echo '<h3>Categories</h3>';

	$categories = get_categories( // Returns array of objects.
		array(
			'orderby'    => 'name',
			'order'      => 'ASC',
			'hide_empty' => 1,
		)
	);
	// Echo an unordered list of $categories with links.
	ob_start();
	if ( 0 < count( $categories ) ) {
		echo '<ul role="list">';
		foreach ( $categories as $category ) {
			echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></li>';
		}
		echo '</ul>';
	}
	return ob_get_clean();
}

/**
 * Show recent posts in footer
 *
 * @author Josh Robbs <josh@joshrobbs.com>
 * @created 2023-04-02
 *
 * @return string
 */
function wpmb_get_footer_posts() {
	echo '<h3>Recent posts</h3>';
	$recent_posts = wp_get_recent_posts(
		array(
			'numberposts' => 5,
			'post_status' => 'publish',
		)
	);

	ob_start();
	if ( 0 < count( $recent_posts ) ) {
		echo '<ul role="list">';
		foreach ( $recent_posts as $recent ) {
			echo '<li><a href="' . esc_url( get_permalink( $recent['ID'] ) ) . '">' . esc_html( $recent['post_title'] ) . '</a></li>';
		}
		echo '</ul>';
	}
	return ob_get_clean();
}

