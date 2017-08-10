<?php
namespace admin\controller;

use admin\controller\BaseController;
use admin\model\Detail;
class DetailController extends BaseController
{	protected $ttt;
	function _init()
	{
		$this->ttt = new Detail();
	}
	//留言管理操作
	function book()
	{
		if (!empty($_GET['tid'])) {
			$tid = $_GET['tid'];
			
			
			var_dump($tid);
			if ($this->ttt->detaildelete($tid)) {
				$this->success('删除成功','index.php?m=admin&c=detail&a=book');
			} else {
				$this->success('删除失败','index.php?m=admin&c=detail&a=book');
			}
		}
	
		$dat = $this->ttt->dresult();

		$hero = $this->ttt->url();
		$this->assign('dat',$dat);
		$this->assign('hero',$hero);
		$this->display();
	}


	
}