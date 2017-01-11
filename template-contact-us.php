<?php
/**
 * The template for About Zeal
 *
 * Template Name: Contact
 *
 * @package storefront
 */

get_header(); ?>

<div class="max">
	<div  class="hero-banner">
		<div  class="constrain">
			<span  class="hero-text">
				We'd love to hear from you!
			</span>	
		</div>
	</div>	
	<main id="main" class="site-main" role="main">
		<div  class="row-full">
			<div class="constrain column">
				<div  class="constrain cont-const">
					<div  class="lcol-content contact-detail">
						+64 9 820 5010
					</div>
					<img class="contact-image" src="http://128.199.184.16/wp-content/uploads/2017/01/phone-receiver.png" />
				</div>
				<div  class="constrain cont-const">
					<div  class="lcol-content contact-detail">
						sales@pettreats.co.nz
					</div>
					<img class="contact-image" src="http://128.199.184.16/wp-content/uploads/2017/01/close-envelope.png" />
				</div>
			</div>
		</div>
		<div  class="row-full">
			<div class="constrain column">
				<div  class="heading">
					Send us a message
				</div>
				<?php echo do_shortcode( '[pirate_forms]' ) ?>	
			</div>
		</div>
	</main><!-- #main -->
</div>	

<?php
get_footer();
