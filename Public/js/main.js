require.config({
	paths: {
		'jquery': 'lib/jquery/jquery',
		'bootstrap': 'lib/bootstrap/bootstrap',
		'validator': 'lib/bootstrap/bootstrapValidator',
		'core': 'app/core.js'
	},

	shim: {
		'bootstrap': {deps: ['jquery']},
		'validator': {deps: ['jquery']}
	}
});

define(['jquery', 'bootstrap', 'validator'], function($) {

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

	$('#login-form').bootstrapValidator({
		fields: {
			email: {
				validators: {
					notEmpty: {
						message: '您还没有填写邮箱'
					},
					emailAddress: {
						message: '邮箱格式不对哦'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: '您还没有填写密码'
					}
				}
			}
		}
	});

	$('#register-form').bootstrapValidator({
		fields: {
			email: {
				validators: {
					notEmpty: {
						message: '您还没有填写邮箱'
					},
					emailAddress: {
						message: '邮箱格式不对哦'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: '您还没有填写密码'
					},
					stringLength: {
						min: 6,
						max: 30,
						message: '密码长度为6到30个字符'
					},
					identical: {
						field: 'repassword',
						message: '两次密码不一致哦'
					}
				}
			},
			repassword: {
				validators: {
					notEmpty: {
						message: '您还没有输入验证密码'
					},
					stringLength: {
						min: 6,
						max: 30,
						message: '密码长度为6到30个字符'
					},
					identical: {
						field: 'password',
						message: '两次密码输入不一致'
					}
				}
			}
		}
	});

	return $.noConflict(true);
});
