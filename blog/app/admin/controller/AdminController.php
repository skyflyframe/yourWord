<?php
namespace admin\controller;

use admin\controller\BaseController;
use admin\model\Blog;

class AdminController extends BaseController

{	
	protected $neirong;


	function _init()
	{
		$this->neirong = new Blog();
	}
	function admin()
	{
		$this->display();
	}
	//后台文章展示
	function list()
	{
		$result = $this->neirong->bloglist();
		$pagelei = $this->neirong->url();
		//var_dump($result);
		$this->assign('pagelei',$pagelei);
		$this->assign('result',$result);
		$this->display();
	}
	//文章删除
	function listchuli()
	{	if (!empty($_GET['bid'])) {

		$bid = $_GET['bid'];
		if ($this->neirong->blogdelete($bid)) {
			$this->success('删除成功','index.php?m=admin&c=admin&a=list');
		} else {
			$this->error('删除失败');
		}

		}
	}

	//添加文章
	function add()
	{	//var_dump($_POST);
		$this->display();
		if (empty($_POST['title']) || empty($_POST['content']) || empty($_POST['note']) || empty($_POST['sort']) ) {
			// $this->error('请输入完整内容','index.php?m=admin&c=admin&a=add');
			exit;
		}

		
		$title = $_POST['title'];

		$note = $_POST['note'];
		$content = $_POST['content'];
		$sort = $_POST['sort'];

		if ($this->neirong->addcontent($title,$note,$content,$sort)) {
			$this->success('添加内容成功','index.php?m=admin&c=admin&a=list');
		} else {
			$this->error('添加失败');
		}
	 
		
	}
	
}



