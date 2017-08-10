<?php
namespace index\model;

use lgh\framework\Model;

class User extends Model
{
	//登陆
	public function loginChuli($username,$password)
	{
		return $this->field('udertppe,uid')->where(["username='$username'","password='$password'"])->select();
	}
	//查询注册名是否重复
	public function regis($name)
	{
		$date = $this->where("username='$name'")->select();
		return !empty($date[0]);
	}
	//注册
	public function insertin($name,$pwd,$email)
	{
		return $this->insert(['username'=>"$name",'password'=>"$pwd",'email'=>"$email"]);
	}

}
