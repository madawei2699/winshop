<?php
namespace Home\Model;
use Think\Model;
use Think\Page;

class GoodsModel extends Model {

	public function get() {
		return $this->select();
	}


}
