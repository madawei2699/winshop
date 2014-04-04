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

		print_r($model);
		$this->display();
	}

	public function add() {
		$this->display();
	}

	/**
	 * 更新一条数据
	 * @author laoyu <168834615@qq.com>
	 */
	public function update(){
		$res = D('Item')->update();
		if(!$res){
			$this->error(D('Item')->getError());
		}else{
			$this->success($res['id']?'更新成功':'新增成功', Cookie('__forward__'));
		}
	}

	public function recyle() {
		$this->display();
	}

	public function draftbox() {
		$this->display();
	}


}
