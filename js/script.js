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
    var diff = 504;
    
    if (scroll >= diff) {
    	jQuery(".col-md-2.venue-box > *").addClass("fix");
    }
    else {
    	jQuery(".col-md-2.venue-box > *").removeClass("fix");
    }
});