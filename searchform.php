<?php $staging_search_id = wp_unique_id( 'search-form-' ); ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $staging_search_id ); ?>"><span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'staging' ); ?></span></label>
	<input type="search" id="<?php echo esc_attr( $staging_search_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'staging' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
	<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'staging' ); ?></button>
</form>

