<?php 
    if(isset($_POST['sub'])){
    	$title=$_POST['title'];
		$content=$_POST['content'];
		$date=$_POST['date'];
    	$arr= array("$title","$content","$date");
		echo "转换字符串结果：".implode(",",$arr);
    }
 ?>
 
<meta charset="UTF-8"><form action="2-4_test.php" method="post" align="center">
	<h3>请输入标题内容和日期</h3>
	<br>新闻标题: <input type="text" name="title"><br><br>
	新闻内容：<input type="text" name="content"><br><br>
	新闻日期：<input type="text" name="date"><br><br>
	<input type="submit" value="提交" name='sub'>

</form>