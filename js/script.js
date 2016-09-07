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
