require(['../config'], function(){
	require(['home.login2']);
})
, define("home.login2", ['jquery', 'bootstrap'], function () {

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
				//刷新验证码
				$(".reloadverify").click();
			}
		}
	});

	$(function(){
		var verifyimg = $(".verifyimg").attr("src");
					$(".reloadverify").click(function(){
							if( verifyimg.indexOf('?')>0){
									$(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
							}else{
									$(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
							}
					});
	});


})