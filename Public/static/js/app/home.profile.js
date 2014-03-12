require(['../config'], function(){
	require(['home.register2']);
})
, define("home.register2", ['jquery', 'bootstrap'], function () {
	$(document)
		.ajaxStart(function(){
			$("button:submit").addClass("log-in").attr("disabled", true);
		})
		.ajaxStop(function(){
			$("button:submit").removeClass("log-in").attr("disabled", false);
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
			}
		}
	});

})