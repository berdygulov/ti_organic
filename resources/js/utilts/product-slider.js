import Swiper, {Navigation, Pagination, Thumbs} from "swiper";
import {Fancybox, Panzoom} from "@fancyapps/ui";
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


let galleryThumbs = new Swiper('.products-gallery-slider', {
	spaceBetween: 30,
	slidesPerView: 3,
	slideToClickedSlide: true,
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev',
	},
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	centerInsufficientSlides: true,
});

let gallerySingleProducts = new Swiper('.product-big-slider', {
	spaceBetween: 10,
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev',
	},
	clickable: true,
	allowTouchMove: false,
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
	thumbs: {
		swiper: galleryThumbs
	}
});
