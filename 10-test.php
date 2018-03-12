<?php 
	for($i=1;$i<=5;$i++){
		for($j=5-$i;$j>=1;$j--)
			echo '&nbsp;';
		for($k=1;$k<=2*$i-1;$k++)
			echo '*';
		echo "<br>";
	}
	echo "<br>";
	for($i=1;$i<=5;$i++){
		if($i<5){
			for($j=5-$i;$j>=1;$j--)
				echo '&nbsp;';
			echo '*';
			for($k=1;$k<=2*$i-3;$k++){
				echo '&nbsp;';
			}
			if($i>1)
				echo '*';
			echo "<br>";
		}
		
	}
	for($i=1;$i<=9;$i++)
		echo '*';
 ?>