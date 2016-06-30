<!DOCTYPE html>
<html>
<head>
	<title>Second Page</title>
</head>
<body>
<?php
$id = $_GET['id'];
$name = $_GET['name'];
// Just print the global variable $_GET at first 
// print_r($_GET);
// echo the first value of an array $_GET[id]
// echo "<strong><br />" . $name . "</strong><br />";
// echo the second value of an array $_GET[name]
// echo "<strong>" . $id . "</strong><br />";
?>
<br />
<?php
$string = "android hot spot";
echo urlencode($string);
?>
</body>
</html>