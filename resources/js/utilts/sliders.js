import Swiper, {Navigation, Pagination} from "swiper";
import 'swiper/css';

Swiper.use([Navigation, Pagination]);

/*
 Popular product slider
*/

const popularSlider = new Swiper(".popular-container", {
	autoHeight: true,
	slidesPerView: 3,
	clickable: true,
	spaceBetween: 30,
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
			slidesPerView: 2.5
		}
	}
});

const categorySlider = new Swiper(".category-slider", {
	autoHeight: true,
	slidesPerView: 4,
	clickable: true,
	spaceBetween: 30,
	navigation: {
		nextEl: '.category-button-next',
		prevEl: '.category-button-prev',
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
		},
		420: {
			slidesPerView: 1.5,
		},
		470: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 2.5,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4.1
		}
	}
});
