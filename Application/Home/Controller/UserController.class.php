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

	// public function get() {
		// $list = D('Goods')->get();
		// print_r($list);
		// $this->response($list, 'json');
		// $this->display();
	// }

	/* 用户注册 */
	public function register($username = '', $password = '', $repassword = '', $email = '', $verify = '') {
		if(is_login()) {
			$this->redirect('User/Index/index');
		}
		if(IS_POST) {
			// 检测验证码
			// if(!check_verify($verify)){
			// 	$this->error('验证码输入错误！');
			// }

			// 检测密码
			if($password != $repassword){
				$this->error('密码和重复密码不一致！');
			}

			$user = D('User');
			$uid = $user->register($username, $password, $email);
			if($uid > 0){ //注册成功
				//TODO: 发送验证邮件
				$this->success('注册成功！', U('Home/User/login'));
			} else { //注册失败，显示错误信息
				$this->error($this->showRegError($uid));
			}
		} else {
			$this->display();
		}
	}

	/* 用户登录 */
	public function login($username = '', $password = '') {
		if(is_login()) {
			$this->redirect('User/Index/index');
		}
		if(IS_POST) {
			$user = D('User');
			$uid = $user->login($username, $password);
			if($uid > 0) {
				//TODO:跳转到登录前页面
				$this->success('登录成功！', U('User/Index/index'));
			} else {
				switch($uid) {
					case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
					case -2: $error = '密码错误！'; break;
					default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
				}
				$this->error($error);
			}
		} else {
			$this->display();
		}
	}

	/* 退出登录 */
	public function logout() {
		if(is_login()) {
			D('User')->logout();
			$this->success('退出成功！', U('Home/Index/index'));
		} else {
			$this->redirect('Home/User/login');
		}
	}

	/* 验证码，用于登录和注册 */
	public function verify(){
		$verify = new \Think\Verify();
		$verify->entry(1);
	}

	/**
	 * 获取用户注册错误信息
	 * @param  integer $code 错误编码
	 * @return string        错误信息
	 */
	private function showRegError($code = 0) {
		switch($code) {
			case -1:  $error = '用户名长度必须在16个字符以内！'; break;
			case -2:  $error = '用户名被禁止注册！'; break;
			case -3:  $error = '用户名被占用！'; break;
			case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
			case -5:  $error = '邮箱格式不正确！'; break;
			case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
			case -7:  $error = '邮箱被禁止注册！'; break;
			case -8:  $error = '邮箱被占用！'; break;
			case -9:  $error = '手机格式不正确！'; break;
			case -10: $error = '手机被禁止注册！'; break;
			case -11: $error = '手机号被占用！'; break;
			default:  $error = '未知错误';
		}
		return $error;
	}

}
