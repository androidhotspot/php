<?php
	// header("HTTP/1.0 404 NOT FOUND");
	// Immediately exits the page
	// exit;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Header Functions PHP Essential Training</title>
</head>
<body>
<?php
$opr1 = 10;
$opr2 = 20;
$opr2 += $opr1;
if ($opr2 >= 25) {
	// Here we mention the Location as a keyword for which page to be located at which path.
	header("Location: Lesson2.php");
}
else{
	echo $opr2;
}
?>
</body>
</html>