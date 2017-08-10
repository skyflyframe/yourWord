<?php
namespace admin\controller;

use lgh\framework\Template;

class BaseController extends Template
{	//初始化模板文件和缓存文件路径
	function __construct()
	{
		parent::__construct('./cache/admin','./app/admin/view');
		$this->_init();
	}
	function _init()
	{
		
	}
	function display($viewFile=null,$isExtract=true)
	{
		if (empty($viewFile)) {
			$viewFile = $_GET['c'] . '/' . $_GET['a'] . '.html';
			parent::display($viewFile,$isExtract);
		}
	}

	public function notice($msg,$code=1,$url=null,$wait=5)
	{
		if (empty($url)) {
			$url = $_SERVER['HTTP_REFERER'];
		}

		include "app/index/view/notice.html";
	}

	public function success($msg,$url=null,$wait=5)
	{
		$this->notice($msg,1,$url,$wait);
	}


	public function error($msg,$url=null,$wait=5)
	{
		$this->notice($msg,0,$url,$wait);
	}



}







