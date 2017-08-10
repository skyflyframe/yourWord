<?php
namespace admin\model;
use lgh\framework\Model;

use lgh\framework\Page;
class Detail extends Model
{
	function totlepage()
	{
		$date = $this->field('tid')->select();
		return count($date);
	}

	function pageObj()
	{
		$obj = new Page($this->totlepage(),3);
		return $obj;
	}

	
	public function url()
	{
		return $this->pageObj()->allPage();
	}
	

	function dresult()
	{
		return $this->limit($this->pageObj()->limit())->table('detail,user,blog')->field('tid,cont,username,email,createtime')->where('php_user.uid=php_detail.uid and php_detail.bid=php_blog.bid')->select();
	}

	public function detaildelete($tid)

	{
		return $this->where("tid=$tid")->delete();


	}




}