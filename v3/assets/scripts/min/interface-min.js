function elementExists(t){return jQuery(t).length?!0:!1}!function($){$.belowthefold=function(t,e){var o=$(window).height()+$(window).scrollTop();return o<=$(t).offset().top-e.threshold},$.abovethetop=function(t,e){var o=$(window).scrollTop();return o>=$(t).offset().top+$(t).height()-e.threshold},$.rightofscreen=function(t,e){var o=$(window).width()+$(window).scrollLeft();return o<=$(t).offset().left-e.threshold},$.leftofscreen=function(t,e){var o=$(window).scrollLeft();return o>=$(t).offset().left+$(t).width()-e.threshold},$.inviewport=function(t,e){return!($.rightofscreen(t,e)||$.leftofscreen(t,e)||$.belowthefold(t,e)||$.abovethetop(t,e))},$.extend($.expr[":"],{"below-the-fold":function(t,e,o){return $.belowthefold(t,{threshold:0})},"above-the-top":function(t,e,o){return $.abovethetop(t,{threshold:0})},"left-of-screen":function(t,e,o){return $.leftofscreen(t,{threshold:0})},"right-of-screen":function(t,e,o){return $.rightofscreen(t,{threshold:0})},"in-viewport":function(t,e,o){return $.inviewport(t,{threshold:0})}})}(jQuery),$(document).ready(function(){var t;t=$(".clock").FlipClock({clockFace:"MinuteCounter",autoStart:!1}),t.setTime(880),t.setCountdown(!0),t.start(),elementExists("#toggle-navigation-mobile")&&$("#toggle-navigation-mobile").click(function(){$(".navigation-mobile").toggleClass("is-open"),$("body").toggleClass("is-locked")}),elementExists(".js-modal")&&($(".js-modal").click(function(){$("div.o-modal").toggleClass("is-open"),$("body").toggleClass("is-locked")}),$(".o-modal__close").click(function(){$("div.o-modal").toggleClass("is-open"),$("body").toggleClass("is-locked")}));var e=new Swiper(".swiper-container",{pagination:".swiper-pagination",nextButton:".swiper-button-next",prevButton:".swiper-button-prev",slidesPerView:1,paginationClickable:!0,spaceBetween:0,shortSwipes:!1,simulateTouch:!1});elementExists(".js-accordion")&&$("a.o-accordion__link").click(function(){$(this).parent(".js-accordion").toggleClass("is-open"),$(".swiper-container").is(":visible")&&$(".swiper-container").each(function(t){var e=new Swiper($(this),{pagination:".swiper-pagination",nextButton:".swiper-button-next",prevButton:".swiper-button-prev",slidesPerView:1,paginationClickable:!0,spaceBetween:0,shortSwipes:!1,longSwipesRatio:.9})})}),elementExists(".o-show-more")&&$("a.o-show-more__link").click(function(){$(this).parent(".o-show-more").toggleClass("is-open")}),elementExists(".js-add-field")&&$(".js-add-field").click(function(){$(".o-form__fields--hidden").toggleClass("u-visible")}),elementExists(".js-order-summary")&&$("a.c-order-summary__link").click(function(){$(".js-order-summary").toggleClass("is-open"),$("body").toggleClass("c-order-summary-is-open")}),elementExists(".js-order-summary")&&$("a.c-order-summary__list__link").click(function(){$(this).parent().toggleClass("is-open")}),$.fn.waypoint.defaults={context:window,continuous:!0,enabled:!0,horizontal:!1,offset:"20%"},$("a.anchorLink").click(function(){return $("html, body").animate({scrollTop:$($(this).attr("href")).offset().top-100},500),!1}),window.matchMedia("(min-width: 1000px)").matches}),$(document).ready(function(){var t=$(".js-order-summary"),e=$(".dashboard-wrapper").offset().top;$(window).scroll(function(){var o=$(window).scrollTop();o>e?t.css("top",o-e):t.css("top","")})}),function($){$.fn.stickyScroll=function(t){var e={init:function(t){function e(){return $(document).height()-i.container.offset().top-i.container.attr("offsetHeight")}function o(){return i.container.offset().top}function n(t){return $(t).attr("offsetHeight")}var i;return"auto"!==t.mode&&"manual"!==t.mode&&(t.container&&(t.mode="auto"),t.bottomBoundary&&(t.mode="manual")),i=$.extend({mode:"auto",container:$("body"),topBoundary:null,bottomBoundary:null},t),i.container=$(i.container),i.container.length?("auto"===i.mode&&(i.topBoundary=o(),i.bottomBoundary=e()),this.each(function(t){var r=$(this),s=$(window),l=Date.now()+t,c=n(r);r.data("sticky-id",l),s.bind("scroll.stickyscroll-"+l,function(){var t=$(document).scrollTop(),e=$(document).height()-t-c;e<=i.bottomBoundary?r.offset({top:$(document).height()-i.bottomBoundary-c}).removeClass("sticky-active").removeClass("sticky-inactive").addClass("sticky-stopped"):t>i.topBoundary?r.offset({top:$(window).scrollTop()}).removeClass("sticky-stopped").removeClass("sticky-inactive").addClass("sticky-active"):t<i.topBoundary&&r.css({position:"",top:"",bottom:""}).removeClass("sticky-stopped").removeClass("sticky-active").addClass("sticky-inactive")}),s.bind("resize.stickyscroll-"+l,function(){"auto"===i.mode&&(i.topBoundary=o(),i.bottomBoundary=e()),c=n(r),$(this).scroll()}),r.addClass("sticky-processed"),s.scroll()})):void(console&&console.log("StickyScroll: the element "+t.container+" does not exist, we're throwing in the towel"))},reset:function(){return this.each(function(){var t=$(this),e=t.data("sticky-id");t.css({position:"",top:"",bottom:""}).removeClass("sticky-stopped").removeClass("sticky-active").removeClass("sticky-inactive").removeClass("sticky-processed"),$(window).unbind(".stickyscroll-"+e)})}};return e[t]?e[t].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof t&&t?void(console&&console.log("Method"+t+" does not exist on jQuery.stickyScroll")):e.init.apply(this,arguments)}}(jQuery),function(){var t=[].indexOf||function(t){for(var e=0,o=this.length;o>e;e++)if(e in this&&this[e]===t)return e;return-1},e=[].slice;!function(t,e){return"function"==typeof define&&define.amd?define("waypoints",["jquery"],function($){return e($,t)}):e(t.jQuery,t)}(window,function($,o){var n,i,r,s,l,c,a,u,f,d,h,p,m,v,w,y;return n=$(o),u=t.call(o,"ontouchstart")>=0,s={horizontal:{},vertical:{}},l=1,a={},c="waypoints-context-id",h="resize.waypoints",p="scroll.waypoints",m=1,v="waypoints-waypoint-ids",w="waypoint",y="waypoints",i=function(){function t(t){var e=this;this.$element=t,this.element=t[0],this.didResize=!1,this.didScroll=!1,this.id="context"+l++,this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()},this.waypoints={horizontal:{},vertical:{}},this.element[c]=this.id,a[this.id]=this,t.bind(p,function(){var t;return e.didScroll||u?void 0:(e.didScroll=!0,t=function(){return e.doScroll(),e.didScroll=!1},o.setTimeout(t,$[y].settings.scrollThrottle))}),t.bind(h,function(){var t;return e.didResize?void 0:(e.didResize=!0,t=function(){return $[y]("refresh"),e.didResize=!1},o.setTimeout(t,$[y].settings.resizeThrottle))})}return t.prototype.doScroll=function(){var t,e=this;return t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}},!u||t.vertical.oldScroll&&t.vertical.newScroll||$[y]("refresh"),$.each(t,function(t,o){var n,i,r;return r=[],i=o.newScroll>o.oldScroll,n=i?o.forward:o.backward,$.each(e.waypoints[t],function(t,e){var n,i;return o.oldScroll<(n=e.offset)&&n<=o.newScroll?r.push(e):o.newScroll<(i=e.offset)&&i<=o.oldScroll?r.push(e):void 0}),r.sort(function(t,e){return t.offset-e.offset}),i||r.reverse(),$.each(r,function(t,e){return e.options.continuous||t===r.length-1?e.trigger([n]):void 0})}),this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}},t.prototype.refresh=function(){var t,e,o,n=this;return o=$.isWindow(this.element),e=this.$element.offset(),this.doScroll(),t={horizontal:{contextOffset:o?0:e.left,contextScroll:o?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:o?0:e.top,contextScroll:o?0:this.oldScroll.y,contextDimension:o?$[y]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}},$.each(t,function(t,e){return $.each(n.waypoints[t],function(t,o){var n,i,r,s,l;return n=o.options.offset,r=o.offset,i=$.isWindow(o.element)?0:o.$element.offset()[e.offsetProp],$.isFunction(n)?n=n.apply(o.element):"string"==typeof n&&(n=parseFloat(n),o.options.offset.indexOf("%")>-1&&(n=Math.ceil(e.contextDimension*n/100))),o.offset=i-e.contextOffset+e.contextScroll-n,o.options.onlyOnScroll&&null!=r||!o.enabled?void 0:null!==r&&r<(s=e.oldScroll)&&s<=o.offset?o.trigger([e.backward]):null!==r&&r>(l=e.oldScroll)&&l>=o.offset?o.trigger([e.forward]):null===r&&e.oldScroll>=o.offset?o.trigger([e.forward]):void 0})})},t.prototype.checkEmpty=function(){return $.isEmptyObject(this.waypoints.horizontal)&&$.isEmptyObject(this.waypoints.vertical)?(this.$element.unbind([h,p].join(" ")),delete a[this.id]):void 0},t}(),r=function(){function t(t,e,o){var n,i;"bottom-in-view"===o.offset&&(o.offset=function(){var t;return t=$[y]("viewportHeight"),$.isWindow(e.element)||(t=e.$element.height()),t-$(this).outerHeight()}),this.$element=t,this.element=t[0],this.axis=o.horizontal?"horizontal":"vertical",this.callback=o.handler,this.context=e,this.enabled=o.enabled,this.id="waypoints"+m++,this.offset=null,this.options=o,e.waypoints[this.axis][this.id]=this,s[this.axis][this.id]=this,n=null!=(i=this.element[v])?i:[],n.push(this.id),this.element[v]=n}return t.prototype.trigger=function(t){return this.enabled?(null!=this.callback&&this.callback.apply(this.element,t),this.options.triggerOnce?this.destroy():void 0):void 0},t.prototype.disable=function(){return this.enabled=!1},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0},t.prototype.destroy=function(){return delete s[this.axis][this.id],delete this.context.waypoints[this.axis][this.id],this.context.checkEmpty()},t.getWaypointsByElement=function(t){var e,o;return(o=t[v])?(e=$.extend({},s.horizontal,s.vertical),$.map(o,function(t){return e[t]})):[]},t}(),d={init:function(t,e){var o;return e=$.extend({},$.fn[w].defaults,e),null==(o=e.handler)&&(e.handler=t),this.each(function(){var t,o,n,s;return t=$(this),n=null!=(s=e.context)?s:$.fn[w].defaults.context,$.isWindow(n)||(n=t.closest(n)),n=$(n),o=a[n[0][c]],o||(o=new i(n)),new r(t,o,e)}),$[y]("refresh"),this},disable:function(){return d._invoke.call(this,"disable")},enable:function(){return d._invoke.call(this,"enable")},destroy:function(){return d._invoke.call(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,o){return e>0?t.push(o[e-1]):void 0})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,o){return e<o.length-1?t.push(o[e+1]):void 0})},_traverse:function(t,e,n){var i,r;return null==t&&(t="vertical"),null==e&&(e=o),r=f.aggregate(e),i=[],this.each(function(){var e;return e=$.inArray(this,r[t]),n(i,e,r[t])}),this.pushStack(i)},_invoke:function(t){return this.each(function(){var e;return e=r.getWaypointsByElement(this),$.each(e,function(e,o){return o[t](),!0})}),this}},$.fn[w]=function(){var t,o;return o=arguments[0],t=2<=arguments.length?e.call(arguments,1):[],d[o]?d[o].apply(this,t):$.isFunction(o)?d.init.apply(this,arguments):$.isPlainObject(o)?d.init.apply(this,[null,o]):$.error(o?"The "+o+" method does not exist in jQuery Waypoints.":"jQuery Waypoints needs a callback function or handler option.")},$.fn[w].defaults={context:o,continuous:!0,enabled:!0,horizontal:!1,offset:0,triggerOnce:!1},f={refresh:function(){return $.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return null!=(t=o.innerHeight)?t:n.height()},aggregate:function(t){var e,o,n;return e=s,t&&(e=null!=(n=a[$(t)[0][c]])?n.waypoints:void 0),e?(o={horizontal:[],vertical:[]},$.each(o,function(t,n){return $.each(e[t],function(t,e){return n.push(e)}),n.sort(function(t,e){return t.offset-e.offset}),o[t]=$.map(n,function(t){return t.element}),o[t]=$.unique(o[t])}),o):[]},above:function(t){return null==t&&(t=o),f._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){return null==t&&(t=o),f._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){return null==t&&(t=o),f._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){return null==t&&(t=o),f._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return f._invoke("enable")},disable:function(){return f._invoke("disable")},destroy:function(){return f._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;return e=$.extend({},s.vertical,s.horizontal),$.each(e,function(e,o){return o[t](),!0})},_filter:function(t,e,o){var n,i;return(n=a[$(t)[0][c]])?(i=[],$.each(n.waypoints[e],function(t,e){return o(n,e)?i.push(e):void 0}),i.sort(function(t,e){return t.offset-e.offset}),$.map(i,function(t){return t.element})):[]}},$[y]=function(){var t,o;return o=arguments[0],t=2<=arguments.length?e.call(arguments,1):[],f[o]?f[o].apply(null,t):f.aggregate.call(null,o)},$[y].settings={resizeThrottle:100,scrollThrottle:30},n.on("load.waypoints",function(){return $[y]("refresh")})})}.call(this);