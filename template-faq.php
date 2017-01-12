
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
					<li class="faq-nav-item nav-active" href="#1">Category One</li>	
					<li class="faq-nav-item" href="#2">Category Two</li>	
					<li class="faq-nav-item" href="#3">Category Three</li>	
					<li class="faq-nav-item" href="#4">Category Four</li>	
				</ul>
				<hr />
				<div id="1" class="zeal-faq active">
					<?php echo do_shortcode("[hrf_faqs  category='Category-One,wordpress,plugins']"); ?>
				</div>
				<div id="2" class="zeal-faq">
					<?php echo do_shortcode("[hrf_faqs  category='Category-Two,wordpress,plugins']"); ?>
				</div>
				<div id="3" class="zeal-faq">
					<?php echo do_shortcode("[hrf_faqs  category='Category-Three,wordpress,plugins']"); ?>
				</div>
				<div id="4" class="zeal-faq">
					<?php echo do_shortcode("[hrf_faqs  category='Category-Four,wordpress,plugins']"); ?>
				</div>
			</div>
		</div>
		<div  class="relate">
			<div  class="triangle-break">
				
			</div>
		</div>
		<div class="row-full">
			<div class="constrain column">
				<div  class="heading">
					Still have questions? Ask away!	
				</div>
				<?php echo do_shortcode( '[pirate_forms]' ) ?>	
			</div>
		</div>
			
	</main><!-- #main -->
</div>	

<?php
get_footer();
