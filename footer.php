	</div>
	<footer id="colophon" class="site-footer">
		<div class="footer-inner">
			<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
				<div class="footer-widgets">
					<?php foreach ( array( 'footer-1', 'footer-2', 'footer-3' ) as $area ) : ?><div class="footer-widget-area"><?php dynamic_sidebar( $area ); ?></div><?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu', 'container' => 'nav', 'container_aria_label' => esc_attr__( 'Footer menu', 'staging' ), 'fallback_cb' => false ) ); ?>
			<div class="site-info"><?php printf( esc_html__( 'Copyright %1$s %2$s.', 'staging' ), esc_html( wp_date( 'Y' ) ), esc_html( get_bloginfo( 'name' ) ) ); ?></div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

