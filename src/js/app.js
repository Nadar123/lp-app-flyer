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


});
$(window).on('scroll',function(){
    if($(window).scrollTop() >= 100 ){
        $('.header').addClass('active');
    }
    else{
        $('.header').removeClass('active');
    }
})
  /*menu button onclick function*/        
// $(document).ready(function(){
//         $('.menu h4').click(function(){
//             $("nav ul").toggleClass("active")
//     })
// })




console.log('hello12344');
