<?php
namespace index\controller;

use index\controller\BaseController;
use lgh\framework\VerifyCode;
use index\model\User;

class UserController extends BaseController
{
	protected $yong;
	function _init()
	{
		$this->yong = new User();
	}

	//展示登陆页
	function login()
	{


		$this->display();
	}
	//得到验证码
	function yzm()
	{
		$vc = new VerifyCode();
		$vc->outputImage();
		
		$_SESSION['code'] = $vc->getCode();

	}
	//实现登陆
	function dologin()
	{	//var_dump($_SESSION);
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$code  = $_POST['code'];
		$data = $this->yong->loginChuli($username,$password)[0];
		if ($data && count($data) > 0) {
			if ($code == $_SESSION['code']) {
				$_SESSION['username'] = $username;
				$_SESSION['udertppe'] = $data['udertppe'];
				$_SESSION['uid'] = $data['uid'];
				//var_dump($_SESSION);
				$this->success('登陆成功','index.php?m=index&c=index&a=index');
			} else {
				$this->error('验证码错误');
			}

		} else {
			$this->error('登陆失败');
		} 

		
	}
	//退出登陆
	function logout()
	{
		unset($_SESSION['username']);
		unset($_SESSION['udertppe']);
		$this->success('退出成功');
	}
	//
	function register()
	{
		$this->display();

	}

	function registerchuli()
	{	//var_dump($_POST);
		$name = $_POST['username'];
		$pwd = $_POST['password'];
		$confirm = $_POST['confirm'];
		$email = $_POST['email'];
		//var_dump($email);
		if (empty($name)) {
			$this->error('用户名不能为空');
			exit;
		}
		if($this->yong->regis($name)) {
			$this->error('用户名重复');
			exit;
		}
		 if (empty($pwd)) {
		 	$this->error('密码不能为空');
		 	exit;
		}
		$patt = '/\D+/';
		if (!preg_match($patt,$pwd)) {
			$this->error('密码不能纯数字');
			exit;
		}
		if ($pwd != $confirm) {
			$this->error('密码不一致');
			exit;
		}
		$patten = '/\w+@(\w+\.)+(com|cn|net|edu|org)$/';

		if(!preg_match($patten,$email)){
			$this->error('邮箱格式不对');
			exit;
		} 
		
	
		$pwd = md5($pwd);
		if($this->yong->insertin($name,$pwd,$email)) {
			//$_SESSION['username'] = $name;

			$this->success('注册成功','index.php?m=index&c=index&a=index');
		} else {
			$this->error('注册失败');
		}
	}

}
