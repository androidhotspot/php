<!DOCTYPE html>
<html>
<head>
	<title>Encoding HTML PHP Essential Training</title>
</head>
<body>
<?php
$link = "<Click> & you'll see";
?>
<a href="second_page.php?name=
	<?php echo urlencode("android hot spot"); ?>&id=1">
	<?php echo htmlspecialchars($link); ?>
</a>
<?php
$url_page = "php/Lessons/Dynamic/Page1.php";
$val1 = 'This is a String';
$val2 = '"bad" /<> Character$';
$link = "<Click> & You'll See"
?>
<br />
<?php
$url = "http:localhost";
$url .= "?$val1=" . urlencode($val1);
$url .= "&$val2=" . urlencode($val2);
?>

</body>
</html>