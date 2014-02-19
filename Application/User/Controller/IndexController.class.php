<?php
// 本类由系统自动生成，仅供测试用途
namespace User\Controller;
use Think\Controller\RestController;
class IndexController extends RestController {

	protected function _initialize(){

	}

	public function index() {

		// echo "index";
		$this->chklogin();
		$this->display();
		// $list = D('Goods')->get();
		// $this->response($list, 'json');
	}

	public function get() {
		echo 'get';
	}

	/* 用户登录检测 */
	protected function chklogin(){
		/* 用户登录检测 */
		is_login() || $this->error('您还没有登录，请先登录！', U('Home/User/login'));
	}

}
