<?php 
		echo file_get_contents("test.txt");
 ?>
<meta charset="UTF-8"/>

<form action="next.php" method="get">
	<input type="submit" value="同意注册">
</form>
<form action="index.php" method="get">
	<input type="submit" value="我不同意">
</form>