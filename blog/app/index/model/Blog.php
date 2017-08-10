<?php
namespace index\model;

use lgh\framework\Model;
use lgh\framework\Page;
class Blog extends Model
{	
	//查询总数据数
	function totlepage()
	{
		$date = $this->field('bid')->select();
		return count($date);
	}
	//创建对象
	function pageObj()
	{
		$obj = new Page($this->totlepage(),3);
		return $obj;
	}
	//查询首页文章
	public function blogContent()
	{	
		return $this->limit($this->pageObj()->limit())->
		field('title,bid,content,create_time')->select();
	}
	//得到分页的url
	public function url()
	{
		return $this->pageObj()->allPage();
	}

	//查询文章内容,标题
	public function blogTitle($bid)
	{
		return $this->field('content,title,create_time')->where("bid=$bid")->select();
	}

	//查询评论内容和评论人
	function jieguo($bid)
	{
		
		return $this->field('username,cont')->table('php_user,php_detail,php_blog')->where('php_user.uid=php_detail.uid and php_detail.bid=php_blog.bid and php_detail.bid='.$bid)->select();

	}

}
