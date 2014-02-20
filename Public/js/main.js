/**
 * configure RequireJS
 * prefer named modules to long paths, especially for version mgt
 * or 3rd party libraries
 */
require.config({

	paths: {
		'domReady': '../lib/requirejs-domready/domReady',
		'jquery': 'lib/jquery/jquery'
	},

	/**
	 * for libs that either do not support AMD out of the box, or
	 * require some fine tuning to dependency mgt'
	 */
	shim: {
	},

	deps: [
		// kick start application... see bootstrap.js
		'./bootstrap'
	]
});
