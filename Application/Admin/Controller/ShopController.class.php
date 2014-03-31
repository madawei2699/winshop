<?php

namespace Admin\Controller;
use Think\Page;
/**
 * 后台店铺控制器
 * @author yuwenhui <yuwenhui1986@163.com>
 */
class ShopController extends AdminController {


	public function index() {
		$nickname = I('nickname');



		$this->display();
	}

	public function addItem() {
		$this->display();
	}


	public function order() {
		$this->display();
	}

	

}