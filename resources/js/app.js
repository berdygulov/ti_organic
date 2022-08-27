window.$ = require('jquery');
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import './bootstrap';
import './utilts/burger'

Swiper.use([Navigation, Pagination]);

const popularSlider = new Swiper(".popular-container", {
	autoHeight: true,
	slidesPerView: 3,
	clickable: true,
	navigation: {
		nextEl: '.popular-button-next',
		prevEl: '.popular-button-prev',
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 3,
		},
	}
});
