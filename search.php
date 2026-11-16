<?php get_header(); ?>
<main id="primary" class="content-area">
	<header class="page-header"><h1 class="page-title"><?php printf( esc_html__( 'Search results for: %s', 'staging' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1></header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'search' ); endwhile; the_posts_pagination( array( 'mid_size' => 1 ) ); else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
</main>
<?php get_sidebar(); get_footer(); ?>

