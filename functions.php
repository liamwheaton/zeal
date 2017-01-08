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
?>

