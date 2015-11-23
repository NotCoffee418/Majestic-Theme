(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		prepareHeaderSearchForm();
	});
	
})(jQuery, this);

// Search form
var searchInputShown = false;
function handleHeaderSearchForm() {
	if (!searchInputShown) {
		jQuery(".header .search-opener").addClass("hidden");
		jQuery(".header .search-input")
			.css("width", "0px")
			.removeClass("hidden")
			.animate({"width": '+=145'});
		jQuery(".header .search-submit").removeClass("hidden");
		searchInputShown = true;
	}
}
function prepareHeaderSearchForm() {
	jQuery(".header .search-opener").removeClass("hidden");
	jQuery(".header .search-input").addClass("hidden");
	jQuery(".header .search-submit").addClass("hidden");
}