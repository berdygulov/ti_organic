window.$ = require('jquery');
import inputCount from "./utilts/inputCount";
import {pushCitiesToSelectField} from "./utilts/cities";
import "../../node_modules/select2/dist/js/select2.min";
import "../../node_modules/select2/dist/css/select2.min.css";

import './bootstrap';
import './utilts/burger'
import './utilts/sliders'
import './utilts/product-slider'
import './utilts/note'
import './utilts/cities'
import './utilts/selec2'

inputCount('.input-number-increment')

if ($('select[name="city"]').length > 0) {
    $('select[name="city"]').each(function (index, el) {
        pushCitiesToSelectField(el);
    });
}





