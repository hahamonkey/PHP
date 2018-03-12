<?php 
	//声明二维数组
	$user=array(
		array(1,'zhangsan',20,'male'),
		array(2,'lisi',25,'male'),
		array(3,'wangwu',30,'female')
	);
	echo $user[1][1];
	echo "<pre>";
	print_r($user);
	echo "</pre>";
	
	$str=`netstat -an`; //浏览器使utf-8编码，控制台是GBK，故而产生乱码
	echo $str;
 ?>
 
