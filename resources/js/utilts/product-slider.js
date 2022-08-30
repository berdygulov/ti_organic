import Swiper, {Navigation, Pagination, Thumbs} from "swiper";
import {Fancybox, Carousel, Panzoom} from "@fancyapps/ui";
import 'swiper/css';
import "@fancyapps/ui/dist/fancybox.css";
import "@fancyapps/ui/dist/panzoom.css"

Swiper.use([Navigation, Pagination, Thumbs]);

// Zooms
let panZooms = document.querySelectorAll(".zooms")

panZooms.forEach(item => {
	item.Panzoom = new Panzoom(item, {
		panOnlyZoomed: true,
		resizeParent: true,
	})
})

// Product many images gallery slider
let galleryThumbs = new Swiper('.products-gallery-slider', {
	spaceBetween: 30,
	centeredSlides: true,
	slidesPerView: 3,
	touchRatio: 0.2,
	slideToClickedSlide: true,
	loop: true,
	loopedSlides: 4,
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev',
	},
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
});
// Product head big image slider
let gallerySingleProducts = new Swiper('.product-big-slider', {
	spaceBetween: 10,
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev',
	},
	clickable: true,
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
	loop: true,
	loopedSlides: 4,
	thumbs: {
		swiper: galleryThumbs
	}
});
