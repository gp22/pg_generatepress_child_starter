<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
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
