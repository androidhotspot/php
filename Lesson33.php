<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions Processing PHP Essential Training</title>
</head>
<body>
<?php
	// Define a Session Variable with a default value
	$_SESSION['name'] = "androidhotspot";
	$_SESSION['purpose'] = "PHP and ANDROID"
?>
<?php
	// Using the session value which is already defined
	$name = $_SESSION['name'] . ": " . $_SESSION['purpose'];
	echo $name;
?>
</body>
</html>