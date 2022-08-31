window.$ = require('jquery');

import './bootstrap';
import './utilts/burger'
import './utilts/sliders'
import './utilts/product-slider'


let inputCount = (count, increment) => {
	let countValue = document.querySelector(count)
	let incrementValue = document.querySelector(increment)

	let counter = 1;

	countValue.value = counter

	incrementValue.addEventListener('click', () => {
		counter += 1;
		countValue.value = counter;
	})
}
inputCount('#input-number', '#input-number-increment')
inputCount('#input-number-product', '#input-number-increment-product')




