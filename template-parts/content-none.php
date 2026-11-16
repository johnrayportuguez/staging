<section class="no-results not-found">
	<header class="page-header"><h1 class="page-title"><?php esc_html_e( 'Nothing found', 'staging' ); ?></h1></header>
	<div class="page-content">
		<?php if ( is_search() ) : ?><p><?php esc_html_e( 'No results matched your search. Try different keywords.', 'staging' ); ?></p><?php get_search_form(); ?>
		<?php elseif ( current_user_can( 'publish_posts' ) ) : ?><p><?php printf( wp_kses( __( 'Ready to publish? <a href="%s">Create your first post</a>.', 'staging' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php else : ?><p><?php esc_html_e( 'There is no content here yet.', 'staging' ); ?></p><?php endif; ?>
	</div>
</section>

