<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></header>
	<?php if ( has_post_thumbnail() ) : ?><div class="post-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
	<div class="entry-content"><?php the_content(); wp_link_pages( array( 'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'staging' ), 'after' => '</nav>' ) ); ?></div>
	<?php if ( get_edit_post_link() ) : ?><footer class="entry-footer"><?php edit_post_link( esc_html__( 'Edit this page', 'staging' ), '<span class="edit-link">', '</span>' ); ?></footer><?php endif; ?>
</article>

