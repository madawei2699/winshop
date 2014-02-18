<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller\RestController;
class HomeController extends RestController {

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


	public function read_json() {

		echo "string";
		// $this->display();
	}
}
