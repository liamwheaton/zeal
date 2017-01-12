jQuery(document).ready(function() {
	// Back to the top button
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 200) {
			jQuery('.btt').fadeIn(200);
		} else {
			jQuery('.btt').fadeOut(200);
		}
	});
	jQuery('.btt').click(function(event) {
		event.preventDefault();

		jQuery('html, body').animate({scrollTop: 0}, 300);
	})
	// Google map click/scroll experience
	jQuery('#map').addClass('scrolloff');
	jQuery('#overlay').on('mouseup', function() {
		jQuery('#map').addClass('scrolloff');
	});
	jQuery('#overlay').on('mousedown', function() {
		jQuery('#map').removeClass('scrolloff');
	});
	jQuery('#overlay').on('mouseleave', function() {
		jQuery('#map').addClass('scrolloff');
	});
	// FAQ nav state
	jQuery('.faq-nav-item').click(function(){
		jQuery('.faq-nav-item').not(this).removeClass('nav-active');
		jQuery(this).addClass('nav-active');
		jQuery('.zeal-faq').hide();
		jQuery(this.getAttribute('href')).show();
	});
	jQuery('.faq-nav-item:nth-child(1)').click(function() {
		jQuery('hr').removeClass();
	});
	jQuery('.faq-nav-item:nth-child(2)').click(function() {
		jQuery('hr').removeClass();
		jQuery('hr').addClass('active-2');
	});
	jQuery('.faq-nav-item:nth-child(3)').click(function() {
		jQuery('hr').removeClass();
		jQuery('hr').addClass('active-3');
	});
	jQuery('.faq-nav-item:nth-child(4)').click(function() {
		jQuery('hr').removeClass();
		jQuery('hr').addClass('active-4');
	});
});


