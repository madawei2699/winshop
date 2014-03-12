require.config({
	baseUrl: 'Public/static/js/',
	paths: {
		'jquery': 'jquery-2.0.3.min',
		'bootstrap': 'bootstrap/bootstrap',
		'validator': 'bootstrap/bootstrapValidator',
	},

	shim: {
		'jquery': {
			exports: ['jquery', '$']
		},
		'bootstrap': {
			deps: ['jquery'],
			// exports: "jquery.fn.popover"
		},
		'validator': {
			deps: ['jquery'],
		},
		// 'bootstrap-datepicker': {
		// 	deps: ['bootstrap'],
		// 	exports: "jquery.fn.datepicker"
		// }
	}
});