jQuery(document).ready(function() {
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
});


