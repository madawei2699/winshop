require(['../config'], function(){
	require(['home.index2']);
})
, define("home.index2", ['jquery', 'bootstrap'], function () {

	$(function(){
		$(window).resize(function(){
			$("#main-container").css("min-height", $(window).height() - 343);
			console.log('333')
		}).resize();
	})


})