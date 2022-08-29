import Swiper, {Navigation, Pagination, Thumbs} from "swiper";
import {Fancybox, Carousel, Panzoom} from "@fancyapps/ui";
import 'swiper/css';
import "@fancyapps/ui/dist/fancybox.css";

Swiper.use([Navigation, Pagination, Thumbs]);

const gallerySingleProducts = new Swiper('.products-gallery-slider', {
	slidesPerView: "auto",
	spaceBetween: 30,
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
	spaceBetween: 10,
	clickable: true,
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



// const myPanzoom = new Panzoom(document.querySelectorAll(".panzoom"), {
// 	// Your options go here
// });

// let panZooms = document.querySelectorAll(".panzoom")

// panZooms.forEach(item => {
// 	item.Panzoom = new Panzoom(item, {
// 		panOnlyZoomed: true,
// 		resizeParent: true,
// 	})
// })
