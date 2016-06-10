<!DOCTYPE html>
<html>
<head>
	<title>While Loops PHP Essential Training</title>
</head>
<body>
<?php
	$var1 = 0;
	while ($var1 <= 10) {
		echo $var1 . ", ";
		$var1++;
	}
	echo "<br />Count: {$var1} <br />";
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			 echo "FIVE <br />";
		}
		else{
	 		echo $count . "<br />";
		}
		$count++;
		}
?>
</body>
</html>