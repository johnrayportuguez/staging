<?php get_header(); ?>
<main id="primary" class="content-area">
	<section class="error-404 not-found">
		<header class="page-header"><h1 class="page-title"><?php esc_html_e( 'Page not found', 'staging' ); ?></h1></header>
		<div class="page-content"><p><?php esc_html_e( 'The page may have moved or no longer exists. Try a search instead.', 'staging' ); ?></p><?php get_search_form(); ?></div>
	</section>
</main>
<?php get_sidebar(); get_footer(); ?>

