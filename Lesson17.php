<!DOCTYPE html>
<html>
<head>
	<title>For Loop Functions PHP Essential Training</title>
</head>
<body>
<?php
$count = 1;
// for ($count; $count <= 10; $count++) { 
// 	echo $count . "<br />";
// }
for ($count; $count <= 10; $count++) { 
	if ($count == 10) {
		echo "TEN <br />";
	}
	else{
		echo $count . "<br />";		
	}
}
?>
</body>
</html>