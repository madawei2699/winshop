<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Admin\Controller;
use User\Api\UserApi as UserApi;

/**
 * 后台首页控制器
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
class IndexController extends AdminController {

	/**
	 * 后台首页
	 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
	 */
	public function index(){
		if(UID){
			$this->meta_title = '基本信息';
			$this->display();
		} else {
			$this->redirect('Public/login');
		}
	}

	/**
	 * 管理日志
	 * @author yuwenhui <yuwenhui1986@163.com>
	 */
	public function adminlog(){

	}

	/**
	 * 清空系统缓存
	 * @author yuwenhui <yuwenhui1986@163.com>
	 */
	public function cleancache(){
		// 清文件缓存
		$dirs = array(
			'./Runtime/Cache/'
		);

		// 清理缓存
		foreach($dirs as $value){
			remove_all_dir($value);
			echo "<div style='border:2px solid green; background:#f1f1f1; padding:20px;margin:20px;width:800px;font-weight:bold;color:green;text-align:center;'>\"" . $value . "\" 文件缓存目录已经删除! </div> <br /><br />";
		}
		@mkdir ('./Runtime/Cache/', 0777, true);
	}



}
