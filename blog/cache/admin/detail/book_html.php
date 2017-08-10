<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="public/admin/css/pintuer.css">
    <link rel="stylesheet" href="public/admin/css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>姓名</th>       
        
        <th>邮箱</th>
        
        <th width="25%">内容</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>
      <?php if(!empty($dat)):?>
      <?php foreach($dat as $datt):?>      
        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            <?=$datt['tid'];?></td>
          <td><?=$datt['username'];?></td>
          
          <td><?=$datt['email'];?></td>  
                    
          <td><?=$datt['cont'];?></td>
          <td><?=$datt['createtime'];?></td>
          <td><div class="button-group"> <a class="button border-red" href="index.php?m=admin&c=detail&a=book&tid=<?=$datt['tid'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php endforeach;?>
        <?php endif;?>
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="<?=$hero['first'];?>">首页</a> 
        <a href="<?=$hero['pre'];?>">上一页</a>
        <a href="<?=$hero['next'];?>">下一页</a>
        <a href="<?=$hero['last'];?>">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html>