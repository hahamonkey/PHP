<?php 
	for($i=5;$i>=1;$i--){
		$j=$i-1;
		$k=9-$j*2;
		for(;$j>0;$j--){
			echo ' ';
		}
		for($l=1;$l<=$k;$l++){
			echo "*";

		}
		echo "<br>";
	}
 ?>