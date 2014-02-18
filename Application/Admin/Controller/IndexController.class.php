<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller\RestController;
class IndexController extends RestController {

	public function index() {
		echo "admin/index";
		$this->display();
	}

	public function add_goods() {
		echo "add_goods";

	}


	public function read_json() {

		echo "string";
		// $this->display();
	}
}
