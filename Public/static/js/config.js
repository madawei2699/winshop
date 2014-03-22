require.config({
	baseUrl: 'Public/static/js/',
	paths: {
		'zepto': 'gmu/zepto',
		'gmu': 'gmu/gmu',

		'suggestion': 'gmu/widget/suggestion/suggestion',


		'slider': 'gmu/widget/slider/slider',
		'slider-touch': 'gmu/widget/slider/$touch',
		'slider-autoplay': 'gmu/widget/slider/$autoplay',
		'slider-lazyloadimg': 'gmu/widget/slider/$lazyloadimg',
	},

	shim: {
		'gmu': {
			deps: ['zepto'],
		},
		'suggestion': {
			deps: ['gmu'],
		},
		'slider': {
			deps: ['gmu'],
		},
		'slider-touch': {
			deps: ['gmu'],
		},
		'slider-autoplay': {
			deps: ['gmu'],
		},
		'slider-lazyloadimg': {
			deps: ['gmu'],
		},
	}

});