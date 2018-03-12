<?php 
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			if($j==3 || $j==6 ||$j==9)
				continue;
			echo "$i * $j =".$i*$j.' ';
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=2;$j++){
			if($j>$i) break;
			echo "$i * $j =".$i*$j.' ';
		}
		echo "<br>";
	}
	
	echo "<br>";
	
	for($i=1;$i<=3;$i++){
		for($j=1;$j<=2;$j++){
			if($j>$i) break;
			echo "$i * $j =".$i*$j.' ';
		}
		echo "<br>";
	}
 ?>