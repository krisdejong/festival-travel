/*
 * Viewport - jQuery selectors for finding elements in viewport
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *  http://www.appelsiini.net/projects/viewport
 *
 */
(function($) {

    $.belowthefold = function(element, settings) {
        var fold = $(window).height() + $(window).scrollTop();
        return fold <= $(element).offset().top - settings.threshold;
    };

    $.abovethetop = function(element, settings) {
        var top = $(window).scrollTop();
        return top >= $(element).offset().top + $(element).height() - settings.threshold;
    };

    $.rightofscreen = function(element, settings) {
        var fold = $(window).width() + $(window).scrollLeft();
        return fold <= $(element).offset().left - settings.threshold;
    };

    $.leftofscreen = function(element, settings) {
        var left = $(window).scrollLeft();
        return left >= $(element).offset().left + $(element).width() - settings.threshold;
    };

    $.inviewport = function(element, settings) {
        return !$.rightofscreen(element, settings) && !$.leftofscreen(element, settings) && !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
    };

    $.extend($.expr[':'], {
        "below-the-fold": function(a, i, m) {
            return $.belowthefold(a, {threshold : 0});
        },
        "above-the-top": function(a, i, m) {
            return $.abovethetop(a, {threshold : 0});
        },
        "left-of-screen": function(a, i, m) {
            return $.leftofscreen(a, {threshold : 0});
        },
        "right-of-screen": function(a, i, m) {
            return $.rightofscreen(a, {threshold : 0});
        },
        "in-viewport": function(a, i, m) {
            return $.inviewport(a, {threshold : 0});
        }
    });


})(jQuery);

// Check if element exists in dom
function elementExists(element) {
    if(jQuery(element).length) {
        return true;
    }
    return false;
}

$(document).ready(function(){

  var clock;
  clock = $('.clock').FlipClock({
      clockFace: 'MinuteCounter',
      autoStart: false
  });

  clock.setTime(0880);
  clock.setCountdown(true);
  clock.start();

  //datepicker
  if(elementExists('.datepicker')) {
    $('.datepicker').pickadate({
      today: '',
      clear: '',
      close: 'Sluit',
      format: 'dd-mm-yyyy',
      formatSubmit: 'dd-mm-yyyy'
    });   
  }


  // Bind an onclick to touch dropdown menu
  if(elementExists('#toggle-navigation-mobile')) {
      $('#toggle-navigation-mobile').click(function() {
          $('.navigation-mobile').toggleClass('is-open');
          $('body').toggleClass('is-locked');
      });
  }

  if(elementExists('.js-modal')) {
    $('.js-modal').click(function() {
      $('div.o-modal').toggleClass('is-open');
      $('body').toggleClass('is-locked');
    });

    $('.o-modal__close').click(function() {
      $('div.o-modal').toggleClass('is-open');
      $('body').toggleClass('is-locked');
    });
  }


  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 0,
    shortSwipes: false,
    simulateTouch: false
  });

  // Toggle accordion
  if(elementExists('.js-accordion')) {
    $('a.o-accordion__link').click(function() {
      $(this).parent('.js-accordion').toggleClass('is-open');

      if($('.swiper-container').is(':visible')) {
        $('.swiper-container').each(function (index) {
          var swiper = new Swiper($(this), {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 0,
            shortSwipes: false,
            longSwipesRatio: 0.9,
           });
        });
      }
    });
  }

  // Toggle o-show-more
  if(elementExists('.o-show-more')) {
    $('a.o-show-more__link').click(function() {
      $(this).parent('.o-show-more').toggleClass('is-open');
    });
  }

  // Toggle o-show-more
  if(elementExists('.js-add-field')) {
    $('.js-add-field').click(function() {
      $('.o-form__fields--hidden').toggleClass('u-visible');
    });
  }



  // Toggle ordersummary
  if(elementExists('.js-order-summary')) {
    $('a.c-order-summary__link').click(function() {
      $('.js-order-summary').toggleClass('is-open');
      $('body').toggleClass('c-order-summary-is-open');
    });
  }

  // Toggle c-order-dropdowns
  if(elementExists('.js-order-summary')) {
    $('a.c-order-summary__list__link').click(function() {
      $(this).parent().toggleClass('is-open');
    });
  }

  // $(window).scroll(function(){
  //   $('section:in-viewport').each(function(){
  //     var id = $(this).attr('id');
  //     console.log(id);
  //     $('.c-order-summary__list').find('li').removeClass('is-selected');
  //     $('.c-order-summary__list').find('li[data-id="'+ id +'"]').addClass('is-selected');
  //   });
  // });

   $.fn.waypoint.defaults = {
        context: window,
        continuous: true,
        enabled: true,
        horizontal: false,
        offset: '20%'
    }

    // $('section').waypoint(function(){
    //   // $(this).addClass('is-animating');

    //   var id = $(this).attr('id');
    //   console.log(id);
    //   $('.item').removeClass('item');
    //   $('.item').find('div[data-id="'+ id +'"]').addClass('is-selected');
    // });



  //scrolle van de links
  $('a.anchorLink').click(function() {
      $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top - 100
      }, 500);
      return false;
  });

  if(window.matchMedia('(min-width: 1000px)').matches) {
  
  }

//   $(window).scroll( function(){
//         $('.total-fixed').each( function(i){
//             var bottom_of_object = $(this).position().top + $(this).outerHeight();
//             var bottom_of_window = $(window).scrollTop() + $(window).height();
//             if( bottom_of_window > bottom_of_object ){
//                 $(this).animate({'opacity':'1'},500);
//             }
//         }); 
//     });
// });
