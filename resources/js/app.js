window.$ = require('jquery');

import './bootstrap';


$(document).ready(function() {
	$('.burger').click(function() {
		$('.burger,.menu,.header, .header-mobile').addClass('active');
		$('body').addClass('lock');
	});
	$('.second-burger').click(function() {
		$('.burger,.menu,.header, .header-mobile').removeClass('active');
		$('body').removeClass('lock');
	});
});
