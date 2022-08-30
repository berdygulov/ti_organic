import Swiper, {Navigation, Pagination, Thumbs, Zoom} from "swiper";
import {Fancybox, Carousel, Panzoom} from "@fancyapps/ui";
import 'swiper/css';
import "@fancyapps/ui/dist/fancybox.css";
import "@fancyapps/ui/dist/panzoom.css"

Swiper.use([Navigation, Pagination, Thumbs, Zoom]);

const gallerySingleProducts = new Swiper('.products-gallery-slider', {
	slidesPerView: 3,
	spaceBetween: "30",
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	centerInsufficientSlides: true,
	slideToClickedSlide: true,
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev'
	},
});

const productBigImage = new Swiper('.product-big-slider', {
	clickable: true,
	zoom: true,
	pagination: {
		el: '.single-product-pagination',
		clickable: true
	},
	navigation: {
		nextEl: '.single-product-button-next',
		prevEl: '.single-product-button-prev'
	},
	thumbs: {
		swiper: gallerySingleProducts
	}
});

// Zooms
let panZooms = document.querySelectorAll(".zoom")

panZooms.forEach(item => {
	item.Panzoom = new Panzoom(item, {
		panOnlyZoomed: true,
		resizeParent: true,
	})
})
