window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'



jQuery(window).on('load', function($) {
    library.add(fas, far, fab); 
    dom.i2svg();
    moblieNavBar();
    scrollEvent();
    handleTabs();
    handleTableHomePageText();
    handleAccordionJstrading();
    // handleFooterMobileAccordiong()
    // handleAccordion();

  
});

// handle scroll fixed nav menu
function scrollEvent() {
    $(window).on('scroll',function(){
        if($(window).scrollTop() >= 100 ){
            $('.header').addClass('active');
        }
        else{
            $('.header').removeClass('active');
        }
    });
}

// handle respoisve nav menu
function moblieNavBar() {
    const navToggler = document.querySelector('.nav-toggler');
    const navMenu = document.querySelector('.site-navbar ul');
    const navLinks = document.querySelectorAll('.site-navbar a');

    allEventListners();

    function allEventListners() {
        navToggler.addEventListener('click', togglerClick);
        navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
    }

    function togglerClick() {
        navToggler.classList.toggle('toggler-open');
        navMenu.classList.toggle('open');
    }

    function navLinkClick() {
        if(navMenu.classList.contains('open')) {
            navToggler.click();
        }
    }
}

//open tabs home page
function handleTabs() {
    $('.tabs-stage div').hide();
    $('.tabs-stage div:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function(event){
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();
    });

}
//handle Table Home Page tr Text
function handleTableHomePageText() {
    $('.title-wrap').on('click', function(e) {
        e.preventDefault();
        
        $(this).parent().find('.hidden-text').toggleClass('open');
       // $(this).parent().next('.hidden-text').removeClass('open');
        $('.hidden-text').next().slideToggle('slow');
        $(this).find('svg.svg-inline--fa').toggleClass('rotate');
    });
}
 
// console.log('hello12344');
// alert('ggg');

// handle Accordion trading home page tade experience section 
function handleAccordionJstrading () {
  $(".set > a").on("click", function(e) {
      e.preventDefault();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".content").slideUp(200);
      $(".set > a .fas").removeClass("fa-minus").addClass("fa-plus");

    } else {
      $(".set > a .fas").removeClass("fa-minus").addClass("fa-plus");
      $(this).find(".fas").removeClass("fa-plus");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this).siblings(".content").slideDown(200);
    }
  });
}

 // handle footer Accordion
function handleFooterMobileAccordiong () {
    let width = $(window).width();
    if (width <= 769) {
        jQuery('.footer-wrapper .menu-item-has-children').on('click', function (e) {
             e.preventDefault();
             e.stopPropagation();
             
            jQuery(this).find('.sub-menu').slideToggle("slow");
     
         });
        
      } 
}
