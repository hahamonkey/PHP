<?php 
	$info = array(
		'user' => array(
			array(1,'zhangsan',19,'male'),
			array(2,'lisi',20,'male'),
			array(3,'wangwu',25,'female')
		),
		'score' =>array(
			array(1,100,99,10),
			array(2,45,78,90),
			array(3,45,90,87)
		),
		'connect' =>array(
			array(1,110,'aa@bb.com'),
			array(2,120,'bb@bb.com'),
			array(3,130,'cc@cc.com')
		)
	);
	foreach($info as $k=>$j){
		echo "<table>";
		echo "<caption><h3>$k</h3></caption>";
		echo "<tr>";
		foreach($j as $y){
			echo "<td>";
			echo "$y";
			echo "</td>";
		}
		echo "</tr>";
		echo "</table>";
	}
	
 ?>
 