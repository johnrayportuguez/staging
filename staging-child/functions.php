<?php
/** Staging Child functions. @package Staging_Child */

function staging_child_enqueue_styles(): void {
	wp_enqueue_style( 'staging-child-style', get_stylesheet_uri(), array( 'staging-style' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'staging_child_enqueue_styles', 20 );

