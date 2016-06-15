<!DOCTYPE html>
<html>
<head>
	<title>If and Else Functions</title>
</head>
<body>
<?php
$a = 45;
$b = 40;
if ($a > $b) {
	echo "A is Larger than B <br />";
}
elseif ($a == $b) {
	echo "A is equal to B <br />";
}
else {
	$a = $b + 1;
	echo 'Value of $a: ' . $a . "<br />";
}
?>
</body>
</html>