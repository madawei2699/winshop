require(['../config'], function(){
	require(['home.index2']);
})
, define("home.index2", ['zepto', 'gmu', 'suggestion', 'slider', 'slider-touch', 'slider-autoplay', 'slider-lazyloadimg'], function () {

	$('#slider').slider({
		imgZoom: true
	});


	(function () {
		$('#input').suggestion({
				source: "../../data/suggestion.php"
		});
	})();


});