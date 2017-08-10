<?php
namespace index\controller;

use index\controller\BaseController;
use index\model\Blog;

class IndexController extends BaseController
{
	protected $blog;
	
	function _init()
	{
		$this->blog = new Blog();
	
	}
	//展示首页
	public function index()
	{    
		$data = $this->blog->blogContent();
		$date = $this->blog->url();
		//var_dump(count($data));
		$this->assign('data',$data);
		$this->assign('date',$date);
		$this->display();

	}
	//展示评论页
	public function blog()
	{
		$bid = $_GET['bid'];
		$cresult = $this->blog->blogTitle($bid);
		$op = $this->blog->jieguo($bid);
		//var_dump($op);
		//var_dump($cresult);
		$this->assign('op',$op);
		$this->assign('cresult',$cresult);
		$this->assign('bid',$bid);
		$this->display();
	}



}
