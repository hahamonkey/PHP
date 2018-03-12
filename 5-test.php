<?php 
	if(isset($_GET['fo'])){
		$grade=$_GET['grade'];
		if($grade ==' ')
			echo "<script>alert('您的成绩输入有误')</script>";
		else if($grade<60) 
			echo "<script>alert('您的成绩不合格')</script>";
		else if($grade<80)
			echo "<script>alert('您的成绩合格')</script>";
		else if($grade<100)
			echo "<script>alert('您的成绩优秀')</script>";
	}
	if(isset($_GET['re'])){
		echo$_GET['grade']= ' ';
	}
 ?>
 
<meta charset="UTF-8"/>
<form action="5-test.php" method="get">
	<h3>输入分数查询成绩</h3><br>
	分数：<input type='text' name="grade" value="<?php echo $grade;?>"<br>
	<input type="submit" value="提交查询" name="fo">
	<input type="submit" value="重置分数" name="re">
</form>
<script type="text/javascript" charset="utf-8">
	
</script>