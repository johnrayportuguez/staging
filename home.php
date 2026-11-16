<?php
/** Blog posts index. @package Staging */
get_header(); ?>
<main id="primary" class="content-area">
	<header class="page-header"><h1 class="page-title"><?php echo esc_html( single_post_title( '', false ) ?: __( 'Latest Posts', 'staging' ) ); ?></h1></header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; the_posts_pagination( array( 'mid_size' => 1 ) ); else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
</main>
<?php get_sidebar(); get_footer(); ?>

