// jQuery Quovolver v1.0 - http://sandbox.sebnitu.com/jquery/quovolver
// By Sebastian Nitu - Copyright 2009 - All rights reserved
(function($) { $.fn.quovolver = function(speed, delay) {if (!speed) speed = 10;if (!delay) delay = 10000;var quaSpd = (speed*4);if (quaSpd > (delay)) delay = quaSpd;var	quote = $(this),firstQuo = $(this).filter(':first'),lastQuo = $(this).filter(':last'),wrapElem = '<div id="quote_wrap"></div>';$(this).wrapAll(wrapElem);$(this).hide();$(firstQuo).show();$(this).parent().css({height: $(firstQuo).height()});		setInterval(function(){if($(lastQuo).is(':visible')) {var nextElem = $(firstQuo);var wrapHeight = $(nextElem).height();} else {var nextElem = $(quote).filter(':visible').next();var wrapHeight = $(nextElem).height();}$(quote).filter(':visible').fadeOut(speed);setTimeout(function() {$(quote).parent().animate({height: wrapHeight}, speed);}, speed);if($(lastQuo).is(':visible')) {setTimeout(function() {$(firstQuo).fadeIn(speed*2);}, speed*2);} else {setTimeout(function() {$(nextElem).fadeIn(speed);}, speed*2);}}, delay); }; })(jQuery);

//////----TEXT ROTATOR---////////
jQuery(document).ready(function ($) {
$('.textItem').quovolver();
});