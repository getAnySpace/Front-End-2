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
		e.slideUp();
	}
	else {
		e.slideDown();
	}
}
