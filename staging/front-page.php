<?php
/** Static or posts front page. @package Staging */
if ( 'posts' === get_option( 'show_on_front' ) ) { require get_home_template(); return; }
get_header(); ?>
<main id="primary" class="content-area">
	<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'page' ); if ( comments_open() || get_comments_number() ) { comments_template(); } endwhile; ?>
</main>
<?php get_sidebar(); get_footer(); ?>

