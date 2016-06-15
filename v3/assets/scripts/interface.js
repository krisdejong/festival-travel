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
    //   $('.c-order-summary__list').find('li').removeClass('is-selected');
    //   $('.c-order-summary__list').find('li[data-id="'+ id +'"]').addClass('is-selected');
    // });

  //scrolle van de links
  $('a.anchorLink').click(function() {
      $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top - 100
      }, 500);
      return false;
  });

  if(window.matchMedia('(min-width: 1000px)').matches) {
    // $('.js-order-summary').scrollToFixed({
    //   marginTop: $('.c-header').outerHeight(true) + 10,
    //   limit: function() {
    //       var limit = $('.c-footer').offset().top - $('.js-order-summary').outerHeight(true);
    //       return limit;
    //   },
    //   fixed: function() {  },
    //   dontCheckForPositionFixedSupport: true,
    //   removeOffsets: true
    // });
  }

  // $('.js-order-summary').stickyScroll({
  //   //container: '.dashboard-wrapper',
  //   bottomBoundary: '300px'

  // });

});

$(document).ready(function() {
        var el = $('.js-order-summary'),
            top_offset = $('.dashboard-wrapper').offset().top;

        $(window).scroll(function() {
          var scroll_top = $(window).scrollTop();

          if (scroll_top > top_offset) {
            el.css('top', scroll_top - top_offset);
          }
          else {
            el.css('top', '');
          }
        });
      });


/**
 * StickyScroll
 * written by Rick Harris - @iamrickharris
 *
 * Requires jQuery 1.4+
 *
 * Make elements stick to the top of your page as you scroll
 *
 * See README for details
 *
*/

(function($) {
  $.fn.stickyScroll = function(options) {

    var methods = {

      init : function(options) {

        var settings;

        if (options.mode !== 'auto' && options.mode !== 'manual') {
          if (options.container) {
            options.mode = 'auto';
          }
          if (options.bottomBoundary) {
            options.mode = 'manual';
          }
        }

        settings = $.extend({
          mode: 'auto', // 'auto' or 'manual'
          container: $('body'),
          topBoundary: null,
          bottomBoundary: null
        }, options);

        function bottomBoundary() {
          return $(document).height() - settings.container.offset().top
            - settings.container.attr('offsetHeight');
        }

        function topBoundary() {
          return settings.container.offset().top
        }

        function elHeight(el) {
          return $(el).attr('offsetHeight');
        }

        // make sure user input is a jQuery object
        settings.container = $(settings.container);
        if(!settings.container.length) {
          if(console) {
            console.log('StickyScroll: the element ' + options.container +
              ' does not exist, we\'re throwing in the towel');
          }
          return;
        }

        // calculate automatic bottomBoundary
        if(settings.mode === 'auto') {
          settings.topBoundary = topBoundary();
          settings.bottomBoundary = bottomBoundary();
        }

        return this.each(function(index) {

          var el = $(this),
            win = $(window),
            id = Date.now() + index,
            height = elHeight(el);

          el.data('sticky-id', id);

          win.bind('scroll.stickyscroll-' + id, function() {
            var top = $(document).scrollTop(),
              bottom = $(document).height() - top - height;

            if(bottom <= settings.bottomBoundary) {
              el.offset({
                top: $(document).height() - settings.bottomBoundary - height
              })
              .removeClass('sticky-active')
              .removeClass('sticky-inactive')
              .addClass('sticky-stopped');
            }
            else if(top > settings.topBoundary) {
              el.offset({
                top: $(window).scrollTop()
              })
              .removeClass('sticky-stopped')
              .removeClass('sticky-inactive')
              .addClass('sticky-active');
            }
            else if(top < settings.topBoundary) {
              el.css({
                position: '',
                top: '',
                bottom: ''
              })
              .removeClass('sticky-stopped')
              .removeClass('sticky-active')
              .addClass('sticky-inactive');
            }
          });

          win.bind('resize.stickyscroll-' + id, function() {
            if (settings.mode === 'auto') {
              settings.topBoundary = topBoundary();
              settings.bottomBoundary = bottomBoundary();
            }
            height = elHeight(el);
            $(this).scroll();
          })

          el.addClass('sticky-processed');

          // start it off
          win.scroll();

        });

      },

      reset : function() {
        return this.each(function() {
          var el = $(this),
            id = el.data('sticky-id');

          el.css({
            position: '',
            top: '',
            bottom: ''
          })
          .removeClass('sticky-stopped')
          .removeClass('sticky-active')
          .removeClass('sticky-inactive')
          .removeClass('sticky-processed');

          $(window).unbind('.stickyscroll-' + id);
        });
      }

    };

    // if options is a valid method, execute it
    if (methods[options]) {
      return methods[options].apply(this,
        Array.prototype.slice.call(arguments, 1));
    }
    // or, if options is a config object, or no options are passed, init
    else if (typeof options === 'object' || !options) {
      return methods.init.apply(this, arguments);
    }

    else if(console) {
      console.log('Method' + options +
        ' does not exist on jQuery.stickyScroll');
    }

  };
})(jQuery);

// Generated by CoffeeScript 1.6.2
/*!
jQuery Waypoints - v2.0.5
Copyright (c) 2011-2014 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt
*/


(function() {
  var __indexOf = [].indexOf || function(item) { for (var i = 0, l = this.length; i < l; i++) { if (i in this && this[i] === item) return i; } return -1; },
    __slice = [].slice;

  (function(root, factory) {
    if (typeof define === 'function' && define.amd) {
      return define('waypoints', ['jquery'], function($) {
        return factory($, root);
      });
    } else {
      return factory(root.jQuery, root);
    }
  })(window, function($, window) {
    var $w, Context, Waypoint, allWaypoints, contextCounter, contextKey, contexts, isTouch, jQMethods, methods, resizeEvent, scrollEvent, waypointCounter, waypointKey, wp, wps;

    $w = $(window);
    isTouch = __indexOf.call(window, 'ontouchstart') >= 0;
    allWaypoints = {
      horizontal: {},
      vertical: {}
    };
    contextCounter = 1;
    contexts = {};
    contextKey = 'waypoints-context-id';
    resizeEvent = 'resize.waypoints';
    scrollEvent = 'scroll.waypoints';
    waypointCounter = 1;
    waypointKey = 'waypoints-waypoint-ids';
    wp = 'waypoint';
    wps = 'waypoints';
    Context = (function() {
      function Context($element) {
        var _this = this;

        this.$element = $element;
        this.element = $element[0];
        this.didResize = false;
        this.didScroll = false;
        this.id = 'context' + contextCounter++;
        this.oldScroll = {
          x: $element.scrollLeft(),
          y: $element.scrollTop()
        };
        this.waypoints = {
          horizontal: {},
          vertical: {}
        };
        this.element[contextKey] = this.id;
        contexts[this.id] = this;
        $element.bind(scrollEvent, function() {
          var scrollHandler;

          if (!(_this.didScroll || isTouch)) {
            _this.didScroll = true;
            scrollHandler = function() {
              _this.doScroll();
              return _this.didScroll = false;
            };
            return window.setTimeout(scrollHandler, $[wps].settings.scrollThrottle);
          }
        });
        $element.bind(resizeEvent, function() {
          var resizeHandler;

          if (!_this.didResize) {
            _this.didResize = true;
            resizeHandler = function() {
              $[wps]('refresh');
              return _this.didResize = false;
            };
            return window.setTimeout(resizeHandler, $[wps].settings.resizeThrottle);
          }
        });
      }

      Context.prototype.doScroll = function() {
        var axes,
          _this = this;

        axes = {
          horizontal: {
            newScroll: this.$element.scrollLeft(),
            oldScroll: this.oldScroll.x,
            forward: 'right',
            backward: 'left'
          },
          vertical: {
            newScroll: this.$element.scrollTop(),
            oldScroll: this.oldScroll.y,
            forward: 'down',
            backward: 'up'
          }
        };
        if (isTouch && (!axes.vertical.oldScroll || !axes.vertical.newScroll)) {
          $[wps]('refresh');
        }
        $.each(axes, function(aKey, axis) {
          var direction, isForward, triggered;

          triggered = [];
          isForward = axis.newScroll > axis.oldScroll;
          direction = isForward ? axis.forward : axis.backward;
          $.each(_this.waypoints[aKey], function(wKey, waypoint) {
            var _ref, _ref1;

            if ((axis.oldScroll < (_ref = waypoint.offset) && _ref <= axis.newScroll)) {
              return triggered.push(waypoint);
            } else if ((axis.newScroll < (_ref1 = waypoint.offset) && _ref1 <= axis.oldScroll)) {
              return triggered.push(waypoint);
            }
          });
          triggered.sort(function(a, b) {
            return a.offset - b.offset;
          });
          if (!isForward) {
            triggered.reverse();
          }
          return $.each(triggered, function(i, waypoint) {
            if (waypoint.options.continuous || i === triggered.length - 1) {
              return waypoint.trigger([direction]);
            }
          });
        });
        return this.oldScroll = {
          x: axes.horizontal.newScroll,
          y: axes.vertical.newScroll
        };
      };

      Context.prototype.refresh = function() {
        var axes, cOffset, isWin,
          _this = this;

        isWin = $.isWindow(this.element);
        cOffset = this.$element.offset();
        this.doScroll();
        axes = {
          horizontal: {
            contextOffset: isWin ? 0 : cOffset.left,
            contextScroll: isWin ? 0 : this.oldScroll.x,
            contextDimension: this.$element.width(),
            oldScroll: this.oldScroll.x,
            forward: 'right',
            backward: 'left',
            offsetProp: 'left'
          },
          vertical: {
            contextOffset: isWin ? 0 : cOffset.top,
            contextScroll: isWin ? 0 : this.oldScroll.y,
            contextDimension: isWin ? $[wps]('viewportHeight') : this.$element.height(),
            oldScroll: this.oldScroll.y,
            forward: 'down',
            backward: 'up',
            offsetProp: 'top'
          }
        };
        return $.each(axes, function(aKey, axis) {
          return $.each(_this.waypoints[aKey], function(i, waypoint) {
            var adjustment, elementOffset, oldOffset, _ref, _ref1;

            adjustment = waypoint.options.offset;
            oldOffset = waypoint.offset;
            elementOffset = $.isWindow(waypoint.element) ? 0 : waypoint.$element.offset()[axis.offsetProp];
            if ($.isFunction(adjustment)) {
              adjustment = adjustment.apply(waypoint.element);
            } else if (typeof adjustment === 'string') {
              adjustment = parseFloat(adjustment);
              if (waypoint.options.offset.indexOf('%') > -1) {
                adjustment = Math.ceil(axis.contextDimension * adjustment / 100);
              }
            }
            waypoint.offset = elementOffset - axis.contextOffset + axis.contextScroll - adjustment;
            if ((waypoint.options.onlyOnScroll && (oldOffset != null)) || !waypoint.enabled) {
              return;
            }
            if (oldOffset !== null && (oldOffset < (_ref = axis.oldScroll) && _ref <= waypoint.offset)) {
              return waypoint.trigger([axis.backward]);
            } else if (oldOffset !== null && (oldOffset > (_ref1 = axis.oldScroll) && _ref1 >= waypoint.offset)) {
              return waypoint.trigger([axis.forward]);
            } else if (oldOffset === null && axis.oldScroll >= waypoint.offset) {
              return waypoint.trigger([axis.forward]);
            }
          });
        });
      };

      Context.prototype.checkEmpty = function() {
        if ($.isEmptyObject(this.waypoints.horizontal) && $.isEmptyObject(this.waypoints.vertical)) {
          this.$element.unbind([resizeEvent, scrollEvent].join(' '));
          return delete contexts[this.id];
        }
      };

      return Context;

    })();
    Waypoint = (function() {
      function Waypoint($element, context, options) {
        var idList, _ref;

        if (options.offset === 'bottom-in-view') {
          options.offset = function() {
            var contextHeight;

            contextHeight = $[wps]('viewportHeight');
            if (!$.isWindow(context.element)) {
              contextHeight = context.$element.height();
            }
            return contextHeight - $(this).outerHeight();
          };
        }
        this.$element = $element;
        this.element = $element[0];
        this.axis = options.horizontal ? 'horizontal' : 'vertical';
        this.callback = options.handler;
        this.context = context;
        this.enabled = options.enabled;
        this.id = 'waypoints' + waypointCounter++;
        this.offset = null;
        this.options = options;
        context.waypoints[this.axis][this.id] = this;
        allWaypoints[this.axis][this.id] = this;
        idList = (_ref = this.element[waypointKey]) != null ? _ref : [];
        idList.push(this.id);
        this.element[waypointKey] = idList;
      }

      Waypoint.prototype.trigger = function(args) {
        if (!this.enabled) {
          return;
        }
        if (this.callback != null) {
          this.callback.apply(this.element, args);
        }
        if (this.options.triggerOnce) {
          return this.destroy();
        }
      };

      Waypoint.prototype.disable = function() {
        return this.enabled = false;
      };

      Waypoint.prototype.enable = function() {
        this.context.refresh();
        return this.enabled = true;
      };

      Waypoint.prototype.destroy = function() {
        delete allWaypoints[this.axis][this.id];
        delete this.context.waypoints[this.axis][this.id];
        return this.context.checkEmpty();
      };

      Waypoint.getWaypointsByElement = function(element) {
        var all, ids;

        ids = element[waypointKey];
        if (!ids) {
          return [];
        }
        all = $.extend({}, allWaypoints.horizontal, allWaypoints.vertical);
        return $.map(ids, function(id) {
          return all[id];
        });
      };

      return Waypoint;

    })();
    methods = {
      init: function(f, options) {
        var _ref;

        options = $.extend({}, $.fn[wp].defaults, options);
        if ((_ref = options.handler) == null) {
          options.handler = f;
        }
        this.each(function() {
          var $this, context, contextElement, _ref1;

          $this = $(this);
          contextElement = (_ref1 = options.context) != null ? _ref1 : $.fn[wp].defaults.context;
          if (!$.isWindow(contextElement)) {
            contextElement = $this.closest(contextElement);
          }
          contextElement = $(contextElement);
          context = contexts[contextElement[0][contextKey]];
          if (!context) {
            context = new Context(contextElement);
          }
          return new Waypoint($this, context, options);
        });
        $[wps]('refresh');
        return this;
      },
      disable: function() {
        return methods._invoke.call(this, 'disable');
      },
      enable: function() {
        return methods._invoke.call(this, 'enable');
      },
      destroy: function() {
        return methods._invoke.call(this, 'destroy');
      },
      prev: function(axis, selector) {
        return methods._traverse.call(this, axis, selector, function(stack, index, waypoints) {
          if (index > 0) {
            return stack.push(waypoints[index - 1]);
          }
        });
      },
      next: function(axis, selector) {
        return methods._traverse.call(this, axis, selector, function(stack, index, waypoints) {
          if (index < waypoints.length - 1) {
            return stack.push(waypoints[index + 1]);
          }
        });
      },
      _traverse: function(axis, selector, push) {
        var stack, waypoints;

        if (axis == null) {
          axis = 'vertical';
        }
        if (selector == null) {
          selector = window;
        }
        waypoints = jQMethods.aggregate(selector);
        stack = [];
        this.each(function() {
          var index;

          index = $.inArray(this, waypoints[axis]);
          return push(stack, index, waypoints[axis]);
        });
        return this.pushStack(stack);
      },
      _invoke: function(method) {
        this.each(function() {
          var waypoints;

          waypoints = Waypoint.getWaypointsByElement(this);
          return $.each(waypoints, function(i, waypoint) {
            waypoint[method]();
            return true;
          });
        });
        return this;
      }
    };
    $.fn[wp] = function() {
      var args, method;

      method = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      if (methods[method]) {
        return methods[method].apply(this, args);
      } else if ($.isFunction(method)) {
        return methods.init.apply(this, arguments);
      } else if ($.isPlainObject(method)) {
        return methods.init.apply(this, [null, method]);
      } else if (!method) {
        return $.error("jQuery Waypoints needs a callback function or handler option.");
      } else {
        return $.error("The " + method + " method does not exist in jQuery Waypoints.");
      }
    };
    $.fn[wp].defaults = {
      context: window,
      continuous: true,
      enabled: true,
      horizontal: false,
      offset: 0,
      triggerOnce: false
    };
    jQMethods = {
      refresh: function() {
        return $.each(contexts, function(i, context) {
          return context.refresh();
        });
      },
      viewportHeight: function() {
        var _ref;

        return (_ref = window.innerHeight) != null ? _ref : $w.height();
      },
      aggregate: function(contextSelector) {
        var collection, waypoints, _ref;

        collection = allWaypoints;
        if (contextSelector) {
          collection = (_ref = contexts[$(contextSelector)[0][contextKey]]) != null ? _ref.waypoints : void 0;
        }
        if (!collection) {
          return [];
        }
        waypoints = {
          horizontal: [],
          vertical: []
        };
        $.each(waypoints, function(axis, arr) {
          $.each(collection[axis], function(key, waypoint) {
            return arr.push(waypoint);
          });
          arr.sort(function(a, b) {
            return a.offset - b.offset;
          });
          waypoints[axis] = $.map(arr, function(waypoint) {
            return waypoint.element;
          });
          return waypoints[axis] = $.unique(waypoints[axis]);
        });
        return waypoints;
      },
      above: function(contextSelector) {
        if (contextSelector == null) {
          contextSelector = window;
        }
        return jQMethods._filter(contextSelector, 'vertical', function(context, waypoint) {
          return waypoint.offset <= context.oldScroll.y;
        });
      },
      below: function(contextSelector) {
        if (contextSelector == null) {
          contextSelector = window;
        }
        return jQMethods._filter(contextSelector, 'vertical', function(context, waypoint) {
          return waypoint.offset > context.oldScroll.y;
        });
      },
      left: function(contextSelector) {
        if (contextSelector == null) {
          contextSelector = window;
        }
        return jQMethods._filter(contextSelector, 'horizontal', function(context, waypoint) {
          return waypoint.offset <= context.oldScroll.x;
        });
      },
      right: function(contextSelector) {
        if (contextSelector == null) {
          contextSelector = window;
        }
        return jQMethods._filter(contextSelector, 'horizontal', function(context, waypoint) {
          return waypoint.offset > context.oldScroll.x;
        });
      },
      enable: function() {
        return jQMethods._invoke('enable');
      },
      disable: function() {
        return jQMethods._invoke('disable');
      },
      destroy: function() {
        return jQMethods._invoke('destroy');
      },
      extendFn: function(methodName, f) {
        return methods[methodName] = f;
      },
      _invoke: function(method) {
        var waypoints;

        waypoints = $.extend({}, allWaypoints.vertical, allWaypoints.horizontal);
        return $.each(waypoints, function(key, waypoint) {
          waypoint[method]();
          return true;
        });
      },
      _filter: function(selector, axis, test) {
        var context, waypoints;

        context = contexts[$(selector)[0][contextKey]];
        if (!context) {
          return [];
        }
        waypoints = [];
        $.each(context.waypoints[axis], function(i, waypoint) {
          if (test(context, waypoint)) {
            return waypoints.push(waypoint);
          }
        });
        waypoints.sort(function(a, b) {
          return a.offset - b.offset;
        });
        return $.map(waypoints, function(waypoint) {
          return waypoint.element;
        });
      }
    };
    $[wps] = function() {
      var args, method;

      method = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
      if (jQMethods[method]) {
        return jQMethods[method].apply(null, args);
      } else {
        return jQMethods.aggregate.call(null, method);
      }
    };
    $[wps].settings = {
      resizeThrottle: 100,
      scrollThrottle: 30
    };
    return $w.on('load.waypoints', function() {
      return $[wps]('refresh');
    });
  });

}).call(this);


