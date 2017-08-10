<?php
namespace index\controller;
use index\controller\BaseController;
use index\model\Detail;

class DetailController extends BaseController
{
	protected $ui;
	function _init()
	{
		$this->ui = new Detail();
	}


	//发表评论
	function pinsert()
	{	$bid = $_POST['bid'];
	
		//var_dump($_POST);
		
		if (empty($_SESSION['username'])) {
			$this->error('请登陆后再发表评论','index.php');
		} else if(empty($_POST['neirong'])){
			
			$this->error('请输入内容');
		} else {
			$content = $_POST['neirong'];
			$uid = $_SESSION['uid'];
			if ($this->ui->binsert($bid,$uid,$content)) {
				$this->success('发表成功','index.php?m=index&c=index&a=blog&bid='.$bid);
			} else {
				$this->error('发表失败');
			}

		}

		
	}


}