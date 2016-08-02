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
