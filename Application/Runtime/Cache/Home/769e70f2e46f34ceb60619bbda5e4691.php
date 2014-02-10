<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title><?php echo C('WEB_SITE_TITLE');?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />

<link href="/winshop/Public/static/css/main.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/winshop/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->


<script src="/winshop/Public/static/js/sea.js"></script>
</head>
<body>
	<!-- 头部 -->
	<!-- navbar -->
<!-- <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="<?php echo U('index/index');?>">OneThink</a>
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <think:nav name="nav">
                    	<?php if(($nav["pid"]) == "0"): ?><li>
                            <a href="<?php echo (get_nav_url($nav["url"])); ?>" target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a>
                        </li><?php endif; ?>
                    </think:nav>
                </ul>
            </div>
        </div>
    </div>
</div> -->

	<!-- /头部 -->
	
	<!-- 主体 -->
	

		

		
		
	<script language="javascript">
		seajs.use('app/main', function(main) {
			main.init();
			main.load('index');
		});
	</script>
	<!-- <div class="main"> -->
		<section id="menu">
			<div class="toolbar">
				<a href="#menu" class="back">返回</a>
				<a href="#menu" class="cancel">取消</a>
				<h1>UI</h1>
			</div>
			<ul class="menu">
				<li class="arrow"><a href="base.html">Menu 1</a></li>
				<li class="arrow"><a href="#menu_2">Menu 2</a></li>
				<li class="arrow"><a href="#menu_3">Menu 3</a></li>
				<li>Menu 1</li>
				<li>Menu 1</li>
			</ul>
		</section>

		<section id="menu_1">
			<div class="toolbar">
				<h1>Menu 1</h1>
			</div>
			<ul class="menu">
				<li>SubMenu 1</li>
				<li>SubMenu 2</li>
			</ul>
		</section>

		<section id="menu_2">
			<div class="toolbar">
				<h1>Menu 2</h1>
			</div>
			<ul class="menu">
				<li>SubMenu 1</li>
				<li>SubMenu 2</li>
			</ul>
		</section>

		<section id="menu_3">
			<div class="toolbar">
				<h1>Menu 3</h1>
			</div>
			<ul class="menu">
				<li>SubMenu 1</li>
				<li>SubMenu 2</li>
			</ul>
		</section>
	<!-- </div> -->






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
		"APP"    : "/winshop/index.php", //当前项目地址
		"PUBLIC" : "/winshop/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>