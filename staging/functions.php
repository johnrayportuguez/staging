<?php
/** Theme functions and definitions. @package Staging */

if ( ! defined( 'STAGING_VERSION' ) ) {
	define( 'STAGING_VERSION', '1.0.0' );
}

function staging_setup(): void {
	load_theme_textdomain( 'staging', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 260, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'staging' ),
		'footer'  => __( 'Footer Menu', 'staging' ),
	) );
}
add_action( 'after_setup_theme', 'staging_setup' );

function staging_content_width(): void {
	$GLOBALS['content_width'] = apply_filters( 'staging_content_width', 760 );
}
add_action( 'after_setup_theme', 'staging_content_width', 0 );

function staging_widgets_init(): void {
	$areas = array(
		'sidebar-1' => __( 'Sidebar', 'staging' ),
		'footer-1'  => __( 'Footer One', 'staging' ),
		'footer-2'  => __( 'Footer Two', 'staging' ),
		'footer-3'  => __( 'Footer Three', 'staging' ),
	);
	foreach ( $areas as $id => $name ) {
		register_sidebar( array(
			'name'          => $name,
			'id'            => $id,
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'staging_widgets_init' );

function staging_scripts(): void {
	wp_enqueue_style( 'staging-style', get_template_directory_uri() . '/style.css', array(), STAGING_VERSION );
	wp_enqueue_script( 'staging-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), STAGING_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'staging_scripts' );

function staging_excerpt_more(): string {
	return sprintf( ' &hellip; <a class="more-link" href="%s">%s</a>', esc_url( get_permalink() ), esc_html__( 'Continue reading', 'staging' ) );
}
add_filter( 'excerpt_more', 'staging_excerpt_more' );

require get_template_directory() . '/inc/template-tags.php';

