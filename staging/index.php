<?php get_header(); ?>
<main id="primary" class="content-area">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?><header class="page-header"><h1 class="page-title"><?php single_post_title(); ?></h1></header><?php endif; ?>
		<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; ?>
		<?php the_posts_pagination( array( 'mid_size' => 1, 'prev_text' => esc_html__( 'Previous', 'staging' ), 'next_text' => esc_html__( 'Next', 'staging' ) ) ); ?>
	<?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
</main>
<?php get_sidebar(); get_footer(); ?>

