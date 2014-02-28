require.config({
	paths: {
		'jquery': 'lib/jquery/jquery',
		'bootstrap': 'lib/bootstrap/bootstrap',
		'core': 'app/core.js'
	},

	shim: {
		'bootstrap': {deps: ['jquery']}
	}
});

define(['jquery', 'bootstrap'], function($) {

	$(document)
		.ajaxStart(function(){
			$("button:submit").addClass('disabled').attr("disabled", true);
		})
		.ajaxStop(function(){
			$("button:submit").removeClass('disabled').attr("disabled", false);
		});

	$("form").submit(function(){
		var self = $(this);
		$.post(self.attr("action"), self.serialize(), success, "json");
		return false;

		function success(data){
			if(data.status){
				window.location.href = data.url;
			} else {
				self.find(".Validform_checktip").text(data.info);
				//刷新验证码
				$(".reloadverify").click();
			}
		}
	});


	return $.noConflict(true);
});
