<?php
namespace index\model;
use lgh\framework\Model;



class Detail extends Model

{	
	//发表评论
	function binsert($bid,$uid,$content) 
	{
		return $this->insert(['bid'=>"$bid",'uid'=>"$uid",'cont'=>"$content"]);
	}
	
}

