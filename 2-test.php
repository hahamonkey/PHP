<?php 
	/*第一种
	echo "<table border='1'>";
		for($i=1;$i<=9;$i++){
			echo "<tr>";
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo "$i * $j = ".$i*$j;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";*/
	/*第二种
	echo "<table border='1'>";
		for($i=9;$i>=1;$i--){
			echo "<tr>";
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo "$i * $j = ".$i*$j;
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";*/
	
		echo "<table border='1'>";
			for($i=9;$i>=1;$i--){
				echo "<tr>";
				for($j=1;$j<=9-$i;$j++){
					echo "<td>";
					echo "&nbsp;";
					echo "</td>";
				}
				for($k=1;$k<=$i;$k++){
					echo "<td>";
					echo "$i * $j = ".$i*$j;
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
	
	/*
	echo "<table border='1'>";
			for($i=1;$i<=9;$i++){
				echo "<tr>";
				for($j=1;$j<=9-$i;$j++){
					echo "<td>";
					echo "&nbsp;";
					echo "</td>";
				}
				for($k=1;$k<=$i;$k++){
					echo "<td>";
					echo "$i * $j = ".$i*$j;
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		*/
	
 ?>