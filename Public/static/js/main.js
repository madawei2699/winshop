require.config({
	baseUrl: '/',
	paths: {
		'jQuery': '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min',
	},
	shim: {
		'jQuery': {'exports' : 'jQuery'}
	}
});

require(['jQuery', 'bootstrap'], function ($, bootstrap) {
	$(function () { // using jQuery because it will run this even if DOM load already happened
		angular.bootstrap(document, ['mainApp']);
	});
});