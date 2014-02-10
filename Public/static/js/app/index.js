define(function(require, exports) {
	var core = require('core');
	require('event');
	require('touch');


	exports.init = function(context, options){
		$(document).ready(function(){
			var activate = ('createTouch' in document) ? 'touchstart' : 'click';

			console.log('eeee')

			$("body > section").first().addClass("current");

			$("a.back").live(activate, function(event) {
				var current = $(this).attr("href")
				$(".current").removeClass("current").addClass("reverse")
				$(current).addClass("current")
			})

			$(".menu a[href]").live(activate, function(event) {
				var link = $(this), section = link.closest('section'),
					prev_element = "#"+(section.removeClass("current").addClass("reverse").attr("id"))
				$(link.attr("href")).addClass("current")
				$(".current .back").remove()
				$(".current .toolbar").prepend("<a href=\""+prev_element+"\" class=\"back\">Back</a>")
			})
		})
	};
});