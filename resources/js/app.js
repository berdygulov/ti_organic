window.$ = require('jquery');
import inputCount from "./utils/inputCount";
import {pushCitiesToSelectField} from "./utils/cities";
import "../../node_modules/select2/dist/js/select2.min";
import "../../node_modules/select2/dist/css/select2.min.css";
import Cleave from 'cleave.js';

require('../../node_modules/cleave.js/dist/addons/cleave-phone.kz');

import './bootstrap';
import './utils/burger'
import './utils/sliders'
import './utils/product-slider'
import './utils/cities'
import './utils/select2'

if ($('.input-phone').length > 0) {
    new Cleave('.input-phone', {
        phone: true,
        prefix: '+7',
        phoneRegionCode: 'kz'
    });
}

/**
 * Code fragment to close form success feedback
 * */
if ($('.feedback').length > 0) {
    const close = $('.feedback-close');
    close.on('click', function () {
        $(this).parent('.feedback').addClass('hidden');
    })
}


inputCount('.input-number-increment')

/**
 * Imported  function
 * to push cities array into select fields
 */

if ($('select[name="city"]').length > 0) {
    $('select[name="city"]').each(function (index, el) {
        pushCitiesToSelectField(el);
    });
}





