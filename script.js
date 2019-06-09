'use strict';

$(document).ready(function() {
	$('.js-scrollTo').on('click', function() { 
		var page = $(this).attr('href');
		$('html, body').animate( { scrollTop: $(page).offset().top }, 1000 );
		return false;
	});
});