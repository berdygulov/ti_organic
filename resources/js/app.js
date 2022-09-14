window.$ = require('jquery');
import inputCount from "./utils/inputCount";
import {pushCitiesToSelectField} from "./utils/cities";
import "../../node_modules/select2/dist/js/select2.min";
import "../../node_modules/select2/dist/css/select2.min.css";

import './bootstrap';
import './utils/burger'
import './utils/sliders'
import './utils/product-slider'
import './utils/note'
import './utils/cities'
import './utils/select2'

inputCount('.input-number-increment')

if ($('select[name="city"]').length > 0) {
	$('select[name="city"]').each(function (index, el) {
		pushCitiesToSelectField(el);
	});
}





