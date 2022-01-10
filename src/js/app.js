window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'

library.add(fas, far, fab) 

dom.i2svg()


jQuery(window).on('load', function($) {
    // handleLoader();
    // initFeather();

});

// Dashboard loder
function handleLoader() {
    jQuery(".preloader").fadeOut();
}

// feather init icons Dashboard
function initFeather() {
    feather.replace();
}





console.log('hello12344');
