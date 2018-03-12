<?php 
	$arr['02-11']='外地出差';
	$arr['03-24']='看美剧';
	$arr['04-21']='打游戏';
	
	if(isset($_POST['sub'])){
		$data=$_POST['date'];
		$darr=explode('-',$date);
	}
 ?>
 
<meta charset='UTF-8'>
<h3>单价查询当前日程</h3>
<form action="2-1_test.php" method="post">
	输入查询日期：<input type="text" name="date"><br>
	<input type="submit" name="sub">
	<input type="reset" name="rst">
</form>
