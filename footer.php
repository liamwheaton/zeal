<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
	<a  class="btt" href="#top">
		<span  class="triangle"></span>
	</a>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
			<img src="http://128.199.184.16/wp-content/uploads/2017/01/Heart-icon-200.png" class="footer-img" />	
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>
			<div  class="footer-title">
				Our Products
				<div  class="links">
					<a  class="link">
						Dried Food	
					</a>	
					<a  class="link">
						Wet Food	
					</a>	
					<a  class="link">
						Treats 
					</a>	
					<a  class="link">
						Chews 
					</a>	
				</div>
			</div>
			<div  class="footer-title">
				Engage with us!
				<div  class="soc-med">
					facebook
				</div>
				<div  class="soc-med">
					instagram
				</div>	
			</div>

		</div><!-- .col-full -->
		<div  class="max">
			<div  class="legal">
				<div  class="copyright">
					© 2016 Zeal	
				</div>	
				<div  class="terms">
					<a>Privacy</a>		
					<a>Terms</a>
				</div>
			</div>
			
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
