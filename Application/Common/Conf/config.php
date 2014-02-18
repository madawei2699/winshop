<?php
return array(
	/* 系统配置 */
	// 'VIEW_PATH' => './Theme/'.THEME_NAME.'/',

	/* 调试配置 */
	'SHOW_PAGE_TRACE' => false,

	/* URL配置 */
	'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL' => 3, //URL模式
	'VAR_URL_PARAMS' => '', // PATHINFO URL参数变量
	'URL_PATHINFO_DEPR' => '/', //PATHINFO URL分割符


	/* 数据库配置 */
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'winshop', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '123456',  // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'winshop_', // 数据库表前缀


	'URL_ROUTER_ON' => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则
	  // 'api/:token' => 'Home/Weixin/index',
	  array('login/:id', 'login/login_put','', array('ext'=>'json', 'method'=>'put')),
	 ),
);