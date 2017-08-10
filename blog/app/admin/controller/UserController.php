<?php
namespace admin\controller;
use admin\controller\BaseController;
use admin\model\User;
class UserController extends BaseController

{	protected $name;

	function _init()
	{	
		$this->name = new User();
	}

	//展示修改页面
	function pass () 
	{
		//var_dump($_SESSION['username']);
		$username = $_SESSION['username'];
		$this->assign('username',$username);
		$this->display();
	}
	//修改密码操作
	function xiugai()
	{	$username = $_SESSION['username'];
		//var_dump($username);
		//var_dump($_POST);
		if (empty($_POST['mpass']) || empty($_POST['newpass']) || empty($_POST['renewpass'])) {
			$this->error('请填写完整的信息');
			exit;
		}
		$mpass = $_POST['mpass'];
		$newpass = $_POST['newpass'];
		$renewass = $_POST['renewpass'];

		$mpass = md5($mpass);
		//var_dump($mpass);
		$date = $this->name->cha($username);
		 if ($mpass != $date[0]['password']) {
		 	//var_dump($date[0]['password']);
		 	$this->error('原始密码错误');
		 	exit;
		 }
		 if ($newpass != $renewass) {
		 	$this->error('两次输入密码不一致');
		 	exit;
		 }
		 $newpass = md5($newpass);
		 $result = $this->name->up($newpass,$username);
		 if ($result) {
		 	$this->success('修改成功','index.php?m=admin&c=user&a=pass');
		 } else {
		 	$this->error('修改失败');
		 }

	}

}