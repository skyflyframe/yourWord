<?php
namespace admin\model;
use lgh\framework\Model;

class User extends Model
{
	function cha($username)
	{
		return $this->field('password')->where("username='$username'")->select();
	}

	function up($newpass,$username)
	{
		return $this->where("username='$username'")->update(['password'=>"$newpass"]);
	}
}