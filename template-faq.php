
	<?php
	/**
	 * The template FAQ Zeal
	 *
	 * Template Name: FAQ
	 *
	 * @package storefront
	 */

	get_header(); ?>
<div  class="max">
	<div  class="hero-banner">
		<div  class="constrain">
			<span  class="hero-text">
				Frequently Asked Questions	
			</span>	
		</div>
	</div>	
	<main id="main" class="site-main" role="main">
		<div  class="row-full">
			<div  class="constrain">
				<?php echo do_shortcode("[hrf_faqs]"); ?>
			</div>
		</div>
		<div  class="row-full">
		</div>
		<div  class="row-full">
	</main><!-- #main -->
</div>	

<?php
get_footer();
