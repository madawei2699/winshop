<?php
// 后台商品控制器
namespace Admin\Controller;
use Think\Controller\RestController;
class GoodsController extends RestController {

	public function index() {
		echo "admin/index";
		$this->display();
	}

	public function add() {
		$Goods = M('Goods');
		$Goods->name = 'ThinkPHP';
		$Goods->goods_no = '1000';
		$Goods->sell_price = '122.2';
		$Goods->market_price = '525';
		$Goods->create_time = time();
		$Goods->create_time = '20';
		$Goods->is_del = 0;

		$Goods->add();
	}


	public function read_json() {

		echo "string";
		// $this->display();
	}
}
