jQuery(function() {
	init();
});


function init() {
	var h = jQuery(window).height();
	jQuery("#video").height(h);
	var inner = jQuery("#inner");
	inner.css('padding-top',((h - inner.height()) * 2/3));
	var search = jQuery("#search");
	
}


$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    var diff = jQuery(".col-md-2.venue-box").offset().top;
    
    if (scroll >= diff) {
    	jQuery(".col-md-2.venue-box > *").addClass("fix");
    }
    else {
    	jQuery(".col-md-2.venue-box > *").removeClass("fix");
    }
});


function hide(element) {
	var e = jQuery(element).next();
	if (e.is(':visible')) {
		e.stop().slideUp();
		jQuery(element).addClass('up');
	}
	else {
		e.stop().slideDown();
		jQuery(element).removeClass('up');
	}
	
	return false;
}


jQuery("*").click(function(event) {
	var t = jQuery(this);
	console.log(event.target.id);
	console.log(t.attr('id'));
});


$(function() {
  var $form = $('#payment-form');
  $form.submit(function(event) {
    // Disable the submit button to prevent repeated clicks:
    $form.find('.submit').prop('disabled', true);

    // Request a token from Stripe:
    Stripe.card.createToken($form, stripeResponseHandler);

    // Prevent the form from being submitted:
    return false;
  });
});

function stripeResponseHandler(status, response) {
  // Grab the form:
  var $form = jQuery('#payment-form');

  if (response.error) { // Problem!
	
	console.log("problem");
	
    // Show the errors on the form:
    $form.find('.payment-errors').text(response.error.message);
    $form.find('.submit').prop('disabled', false); // Re-enable submission

  } else { // Token was created!
  	
  	console.log("Token was created!");

    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken">').val(token));

    // Submit the form:
    $form.get(0).submit();
  }
};
