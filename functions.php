<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

/**
 * Disable loading child theme stylesheet
 */
add_filter( 'generate_load_child_theme_stylesheet', '__return_false' );

/**
 * Load the generated stylesheet
 */
add_filter( 'generate_load_child_theme_stylesheet', function() {

	wp_enqueue_style(
		'generate-child',
		get_stylesheet_directory_uri() . '/build/css/style.css',
		false,
		filemtime( get_stylesheet_directory() . '/build/css/style.css' ),
		'all'
	);

} );

/**
 * Add classes to the menu
 */
add_filter( 'generate_menu_class', function( $classes ) {

	return array_merge( $classes, array( 'tracking-wider' ) );

} );

/**
 * Remove default footer
 */
add_action( 'after_setup_theme', function() {

	remove_action( 'generate_footer', 'generate_construct_footer' );
	remove_action( 'generate_footer', 'generate_construct_footer_widgets', 5 );

} );

/**
 * Add custom footer
 */
add_action( 'generate_footer', function() {

	include( get_stylesheet_directory() . '/inc/footer.php' );

} );
