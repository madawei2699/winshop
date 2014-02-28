<?php
namespace Home\Model;
use Think\Model;
use Think\Page;

class UserModel extends Model {

	//自动验证
	/* 用户模型自动验证 */
	protected $_validate = array(
		/* 验证用户名 */
		array('username', '1,30', -1, self::EXISTS_VALIDATE, 'length'), //用户名长度不合法
		array('username', '', -3, self::EXISTS_VALIDATE, 'unique'), //用户名被占用

		/* 验证密码 */
		array('password', '6,30', -4, self::EXISTS_VALIDATE, 'length'), //密码长度不合法

		/* 验证邮箱 */
		array('email', 'email', -5, self::EXISTS_VALIDATE), //邮箱格式不正确
		array('email', '1,32', -6, self::EXISTS_VALIDATE, 'length'), //邮箱长度不合法
		array('email', '', -8, self::EXISTS_VALIDATE, 'unique'), //邮箱被占用

		/* 验证手机号码 */
		// array('mobile', '//', -9, self::EXISTS_VALIDATE), //手机格式不正确 TODO:
		// array('mobile', 'checkDenyMobile', -10, self::EXISTS_VALIDATE, 'callback'), //手机禁止注册
		// array('mobile', '', -11, self::EXISTS_VALIDATE, 'unique'), //手机号被占用
	);

	// 自动完成
	protected $_auto = array (
		array('password', 'md5', self::MODEL_BOTH, 'function'),
		array('repassword', 'md5', self::MODEL_BOTH, 'function'),
		array('username', 'getUsername', self::MODEL_INSERT, 'callback'),
		array('created', 'time', self::MODEL_INSERT, 'function'),
		array('updated', 'time', self::MODEL_INSERT, 'function'),
		array('createip', 'getIp', self::MODEL_INSERT, 'callback'),
		array('gid', 'getGid', self::MODEL_INSERT, 'callback'),
	);

	public function register($email, $password){
		$data = array(
			'email' => $email,
			'password' => $password,
		);

		//TODO::验证手机
		// if(empty($data['mobile'])) unset($data['mobile']);

		/* 添加用户 */
		if($this->create($data)) {
			$uid = $this->add();
			return $uid ? $uid : 0; //0-未知错误，大于0-注册成功
		} else {
			return $this->getError(); //错误详情见自动验证注释
		}
	}

	public function login($email, $password){
		$map['email'] = $email;
		/* 获取用户数据 */
		$user = $this->where($map)->find();
		if(is_array($user)) {
			/* 验证用户密码 */
			if(md5($password) === $user['password']){
				// $this->updateLogin($user['id']); //更新用户登录信息
				// 登录用户
				$this->autoLogin($user);
				return $user['id']; //登录成功，返回用户ID
			} else {
				return -2; //密码错误
			}
		} else {
			return -1; //用户不存在或被禁用
		}
	}

	/**
	 * 注销当前用户
	 * @return void
	 */
	public function logout(){
		session('user_auth', null);
		session('user_auth_sign', null);
	}

	public function getIp(){
		return $_SERVER['REMOTE_ADDR'];
	}

	public function getGid(){
		return 1;
	}

	public function getUsername(){
		return I('post.username') ? I('post.username') : preg_replace('/@.*/', '', I('post.email'));
	}

	/**
	 * 自动登录用户
	 * @param  integer $user 用户信息数组
	 */
	private function autoLogin($user){
		/* 更新登录信息 */
		$data = array(
			'id' => $user['id'],
			// 'login' => array('exp', '`login`+1'),
			'last_login_time' => time(),
			'last_login_ip' => get_client_ip(1),
		);
		$this->save($data);

		/* 记录登录SESSION和COOKIES */
		$auth = array(
			'uid' => $user['id'],
			'email' => $user['email'],
		);
		session('user_auth', $auth);
		session('user_auth_sign', data_auth_sign($auth));
	}
}
