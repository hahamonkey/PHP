<?php 
	
	/*for循环实现
	for($i=1;$i<=9;$i++){
			for($j=1;$j<=$i;$j++){
				echo "$i * $j = ".$i*$j." ";
			}
			echo "<br>";
		}*/
	/*while实现
	$i=1;
		while($i<=9){
			$j=1;
			while($j<=$i){
				echo "$i * $j = ".$i*$j." ";
				$j++;
			}
			echo "<br>";
			$i++;
		}*/
// 		do-while
	$i=1;
	do{
		$j=1;
		do{
			echo "$i * $j = ".$i*$j." ";
			$j++;
		}while($j<=$i);
		echo "<br>";
		$i++;
	}while($i<=9)
	
?>
 