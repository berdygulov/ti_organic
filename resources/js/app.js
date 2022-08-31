window.$ = require('jquery');

import './bootstrap';
import './utilts/burger'
import './utilts/sliders'
import './utilts/product-slider'

let count = document.querySelector('#input-number')
let increment = document.querySelector('#input-number-increment')

let counter = 0;

count.value = counter

increment.addEventListener('click',  () => {
	counter += 1;
	count.value = counter;
})
