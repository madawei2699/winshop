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

		$list = $this->lists(M('Item'), $where, 'id desc', null, $field);


		//记录当前列表页的Cookie
    Cookie('__forward__',$_SERVER['REQUEST_URI']);

		$this->assign('list', $list);
		$this->display();
	}

	public function add() {
		// 生成商品编号
		$item['number'] = create_item_sn(4);
		$this->assign('item', $item);
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

	/**
	 * 添加商品时自动保存至草稿箱
	 * @author huajie <banhuajie@163.com>
	 */
	public function autoSave(){
		$res = D('Item')->autoSave();
		if($res !== false){
			$return['data'] = $res;
			$return['info'] = '保存草稿成功';
			$return['status'] = 1;
			$this->ajaxReturn($return);
		}else{
			$this->error('保存草稿失败：'.D('Item')->getError());
		}
	}
}
