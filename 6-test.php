<?php 
	if(isset($_POST['sub'])){
		$row=$_POST['row'];
		$col=$_POST['col'];
		for($i=1;$i<=$row;$i++){
			if($i%2==0){
				$color="blue";
			}else{
				$color="red";
		}
			echo "<table border='1'>";
			echo "<tr bgColor=$color>";
			for($j=1,$k=0;$j<=$col;$j++,$k++){
				echo "<td>";;
				echo "$k";
				echo "</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		if($i%2==0){
			$color="blue";
		}else{
			$color="red";
		}
	}
	if(isset($_POST['re'])){
		$row=$col='';
	}
 ?>
 
<form action="6-test.php" method="post">
  	<h3>输入行列生成表格</h3>
	输入行：<input type="text"  name="row" value="<?php echo $row ?>"><br>
	输入列：<input type="text" name="col" value="<?php echo $col ?>"><br><br>
	<input type="submit" value="生成表格"/ name='sub'>
	<input type="submit" value="重置行列"/ name='re'>
</form><script type="text/javascript" charset="utf-8">
	
</script>