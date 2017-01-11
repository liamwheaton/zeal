
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
			<div  class="constrain faq">
				<ul  class="faq-nav">
					<li>Category One</li>	
					<li>Category Two</li>	
					<li>Category Three</li>	
					<li>Category Four</li>	
				</ul>
				<?php echo do_shortcode("[hrf_faqs  category='Category-One,wordpress,plugins']"); ?>
			</div>
		</div>
		<div  class="row-full">
		</div>
		<div  class="row-full">
	</main><!-- #main -->
</div>	

<?php
get_footer();
