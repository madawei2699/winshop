<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller\RestController;
class UserController extends RestController {

	public function index() {
		// echo "index";
		$this->display();
		// $list = D('Goods')->get();
		// $this->response($list, 'json');
	}

	public function get() {
		$list = D('Goods')->get();
		// print_r($list);
		$this->response($list, 'json');
		// $this->display();
	}


	public function login_get() {

		// print_r($list);
		// echo "login";
		echo $this->_method;
		$this->display();
	}

	public function login_post() {

		// print_r($list);
		// echo "login";
		// $this->display();
		echo $this->_method;
	}

	public function login_put() {
		echo $this->_method;
	}

}
