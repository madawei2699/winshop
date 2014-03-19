<?php

namespace Admin\Controller;
use Think\Page;
/**
 * 后台商品控制器
 * @author yuwenhui <yuwenhui1986@163.com>
 */
class ItemController extends AdminController {


	public function index() {
		$nickname = I('nickname');



		$this->display();
	}

	public function item() {
		$this->display();
	}

	public function addItem() {
		$this->display();
	}


}