window.$ = require('jquery');

import './bootstrap';


$(document).ready(function() {
	$('.burger').click(function() {
		$('.burger,.menu,.header').addClass('active');
		$('body').addClass('lock');
	});
	$('.second-burger').click(function() {
		$('.burger,.menu,.header').removeClass('active');
		$('body').removeClass('lock');
	});
});
