<?php
/** Template tags. @package Staging */

function staging_posted_on(): void {
	printf( '<span class="posted-on">%1$s <a href="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a></span>', esc_html__( 'Posted on', 'staging' ), esc_url( get_permalink() ), esc_attr( get_the_date( DATE_W3C ) ), esc_html( get_the_date() ) );
	printf( '<span class="byline">%1$s <span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span></span>', esc_html__( 'by', 'staging' ), esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() ) );
}

function staging_entry_footer(): void {
	if ( 'post' === get_post_type() ) {
		$categories = get_the_category_list( esc_html__( ', ', 'staging' ) );
		$tags       = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'staging' ) );
		if ( $categories ) { printf( '<span class="cat-links">%1$s %2$s</span>', esc_html__( 'Filed under:', 'staging' ), wp_kses_post( $categories ) ); }
		if ( $tags ) { printf( '<span class="tags-links">%1$s %2$s</span>', esc_html__( 'Tagged:', 'staging' ), wp_kses_post( $tags ) ); }
	}
	edit_post_link( esc_html__( 'Edit', 'staging' ), '<span class="edit-link">', '</span>' );
}

