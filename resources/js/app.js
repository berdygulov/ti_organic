window.$ = require('jquery');
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/css';
import './bootstrap';
import './utilts/burger'

Swiper.use([Navigation, Pagination]);

const popularSlider = new Swiper(".popular-container", {
	autoHeight: true,
	slidesPerView: 3,
	spaceBetween: 30,
	clickable: true,
	navigation: {
		nextEl: '.popular-button-next',
		prevEl: '.popular-button-prev',
	},

});
