<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C('WEB_SITE_TITLE');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>"/>
<meta name="description" content="<?php echo C('content');?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />


<link href="/winshop/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/winshop/Public/css/module.css" rel="stylesheet" type="text/css" media="all" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/winshop/Public/bootstrap/js/html5shiv.js"></script>
<![endif]-->



</head>
<body>
	<!-- 头部 -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo U('Home/Index/index');?>" class="navbar-brand">WinShop</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#home"><i class="glyphicon glyphicon-home"></i> 首页</a></li>

				<li><a href="#case"><i class="glyphicon glyphicon-thumbs-up"></i> 成功案例</a></li>
				<li><a href="#product"><i class="glyphicon glyphicon-th"></i> 应用商店</a></li>
				<!-- <li <?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>><a href="{weixin::U('Home/Index/about')}">关于我们</a></li> -->
				<li <?php if((ACTION_NAME) == "help"): ?>class="active"<?php endif; ?>><a href="{weixin::U('Home/Index/help')}"><i class="glyphicon glyphicon-question-sign"></i> 帮助中心</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<?php if(is_login()): ?><li><a href="<?php echo U('User/Index/index');?>"><span class="glyphicon glyphicon-cog"></span> 管理中心</a></li>
					<li><a href="/#" onclick="Javascript:window.open('<?php echo U('Home/User/logout');?>','_blank')" ><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
				<?php else: ?>
					<li><a href="<?php echo U('Home/User/login');?>"><span class="glyphicon glyphicon-log-in"></span> 登录</a></li>
					<li><a href="<?php echo U('Home/User/register');?>"><span class="glyphicon glyphicon-edit"></span> 申请试用</a></li><?php endif; ?>
			</ul>
		</div>
	</div>
</div>

	<!-- /头部 -->

	<!-- 主体 -->
	

		

		
		



				




	<!-- /主体 -->

	<!-- 底部 -->
	
<!-- footer -->
<footer class="footer">
	<!-- <div class="container">
			<p> 本站由 <strong><a href="http://www.thinkphp.cn" target="_blank">ThinkPHP</a></strong> 强力驱动</p>
	</div> -->
</footer>



<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/winshop", //当前网站地址
		"APP"    : "/winshop/index.php?s=", //当前项目地址
		"PUBLIC" : "/winshop/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
<script data-main="/winshop/Public/js/main" src="/winshop/Public/lib/requirejs/require.js"></script>
 <!-- 用于加载js代码 -->
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>