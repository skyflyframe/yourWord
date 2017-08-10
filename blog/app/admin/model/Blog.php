<?php
namespace admin\model;

use lgh\framework\Model;
use lgh\framework\Page;
class Blog extends Model
{
	function totlepage()
	{
		$date = $this->field('bid')->select();
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
	function bloglist()
	{
		return $this->limit($this->pageObj()->limit())->field('bid,disorder,title,create_time')->select();
	}


	public function blogdelete($bid)

	{
		return $this->where("bid=$bid")->delete();


	}

	public function addcontent($title,$note,$content,$sort)
	{
		return $this->insert(['title'=>"$title",'state'=>"$note",'content'=>"$content",'disorder'=>"$sort"]);
	}
}
