<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_singular() ) : the_title( '<h1 class="entry-title">', '</h1>' ); else : the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); endif; ?>
		<?php if ( 'post' === get_post_type() ) : ?><div class="entry-meta"><?php staging_posted_on(); ?></div><?php endif; ?>
	</header>
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?><a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'large', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?></a><?php endif; ?>
	<div class="entry-content">
		<?php if ( is_singular() ) { the_content(); wp_link_pages( array( 'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'staging' ), 'after' => '</nav>' ) ); } else { the_excerpt(); } ?>
	</div>
	<footer class="entry-footer"><?php staging_entry_footer(); ?></footer>
</article>

