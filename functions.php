<?php

	add_action('init', 'jk_remove_wc_breadcrumbs');
	add_action( 'init', 'jk_remove_sidebar' );
	add_action('init', 'jk_remove_skip_links');
	add_action('wp_enqueue_script', 'my_scripts_method');
	
	wp_register_script('zeal-script', get_bloginfo('stylesheet_directory').'/js/zeal-script.js', array('jquery'), WC_VERSION, TRUE);
	wp_enqueue_script('zeal-script');

	function jk_remove_wc_breadcrumbs(){
		remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb',20,0);
	}

	function jk_remove_sidebar() {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}	

	function jk_remove_skip_links() {
		remove_action('storefront_header', 'storefront_skip_links', 0);
	}

	function storefront_credit() {
		?>
		<div  class="site-info">
			<div  class="links">
				<a  class="link">
					Home	
				</a>
				<a  class="link">
					Products	
				</a>
				<a  class="link">
					Ingredients	
				</a>
				<a  class="link">
					About	
				</a>
				<a  class="link">
					FAQ	
				</a>
				<a  class="link">
					Contact	
				</a>
			</div>	
		</div><!-- .site-info -->
		<?php
	}
	function storefront_site_branding() {
		?>
			<div class="site-branding">
				<img class="heart" src="http://localhost/wordpress/wp-content/uploads/2016/12/Heart-icon-200.png"/>	
				<?php storefront_site_title_or_logo(); ?>
			</div>
		<?php
	}
	function get_product_search_form() {
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		}

		?>

		<img src="http://localhost/wordpress/wp-content/uploads/2017/01/kiwi-basket-200.png"/>	
		<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
			<label class="screen-reader-text" for="woocommerce-product-search-field"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
			<input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
			<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
			<input type="hidden" name="post_type" value="product" />
		</form>
		<?php
	}

?>

