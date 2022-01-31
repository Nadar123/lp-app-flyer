import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import AOS from '../../node_modules/aos/dist/aos';
import '../../node_modules/aos/dist/aos.css';

window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');

jQuery(window).on('load', function($) {
    handleInitVideo();
    library.add(fas, far, fab); 
    dom.i2svg();
    moblieNavBar();
    scrollEvent();
    handleTabs();
    handleTableHomePageText();
    handleAccordionJstrading(); 
    handleFooterMobileAccordiong(); 
    appendAttrToLasListElementBootcamp();
    openTableOfContentPost();
    ScrollProgressBar();
    handleTabeCol();
    handleEvaluationTabs();
    handleEvaluationInnerTabs();

});

//append a href to last li element of bootcamp list php loop //
function appendAttrToLasListElementBootcamp() {
    const myUrl = 'https://google.com';
    const innerText = 'Click here for the programs terms & conditions';
    jQuery("#bootcamp-list li:last-child")
    .append(
        `<li class="item">
            <span class="icon"> &#10003; </span>
            <a class="js-link" href="${myUrl}">
                ${innerText}
            </a>
        </li>`
    );
}

// handle scroll fixed nav menu //
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

// handle respoisve nav menu //
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

//open tabs home page //
function handleTabs() {
    $('.tabs-stage div').hide();
    $('.tabs-stage div:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    $('.tabs-nav a').on('click', function(event){
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();
    });

}
//handle Table Home Page tr Text //
function handleTableHomePageText() {
    $('.showMore.tbl_h').on('click', function(e) {
        e.preventDefault();
       $(this).next().toggleClass('open');
        $(this).find('svg.svg-inline--fa.fa-angle-double-right').toggleClass('rotate');
    });
}
// Handle last col table
function handleTabeCol() {
    $('.title-wrap').on('click', function(e) {
        e.preventDefault();
       $('.hidden-col').toggleClass('active');
        $(this).find('svg.svg-inline--fa.fa-angle-double-right').toggleClass('rotate');
    });
}

// handle Accordion trading home page tade experience section //
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
 // handle footer Accordion //
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
//init video about page //
function handleInitVideo() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i=0; i<vidDefer.length; i++) {
        if(vidDefer[i].getAttribute('data-src')) {
            vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
        } } }
//AOS animate 
AOS.init({
    duration: 1200,
  })

//table of content post post-type pages //
function openTableOfContentPost() {  
    // $('.uagb-toc__title').append('<i class="fas fa-table"></i>');
    $('.uagb-toc__title').on('click', function(e) {
        e.preventDefault();
      $('.uagb-toc__list').slideToggle("fast");
      $(this).toggleClass('rotate');
    });
}

// progress bar fix on botton: 0px //
function ScrollProgressBar() {
    $(document).on('scroll resize', function() {
      let $d = $(document),
          $w = $(window);
      $('#scroll-bar').width(
        ($d.scrollTop() / ($d.height() - $w.height()) * $d.height()) + 'px'
      );
    });
}

///////////////////////////////////
function handleEvaluationTabs() {
    jQuery(".wrapper .tab").on('click' ,function(e) {
        e.preventDefault();
        jQuery(".wrapper .tab").removeClass("active").eq(jQuery(this).index()).addClass("active");
        jQuery(".tab_item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");
}

function handleEvaluationInnerTabs() {
    $(".inner-wrapper .inner-tabs").on('click' ,function(e) {
        e.preventDefault();
        $(".inner-wrapper .inner-tabs").removeClass("open").eq($(this).index()).addClass("open");
        $(".tab-item").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("open");
}