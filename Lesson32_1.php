<!DOCTYPE html>
<html>
<head>
	<title>Cookies Processing PHP Essential Training</title>
</head>
<body>
<?php
	$val1 = 'admin';
	if (isset($_COOKIE['username'])) {
		$val1 = $_COOKIE['username'];
	}
	echo $val1;
?>
</body>
</html>