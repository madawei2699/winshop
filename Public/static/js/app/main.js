seajs.config({
	// 别名
	alias:{
		'zepto': 'lib/zepto/zepto.js',
		'touch': 'lib/zepto/touch.js',
		'event': 'lib/zepto/event.js',
		'core': 'app/core.js'
	}
});

define(function(require, exports, module) {
	var $ = require('zepto');
	// window.$ = $;

	exports.context = {};
	// exports.context.siteurl = "<?php echo URL::base(); ?>";

	exports.load = function(name, options) {
		require.async('./' + name + '.js', function(page) {
			if(page && page.init) {
				page.init(exports.context, options);

			}
		});
	};

	exports.init = function() {

	};
});