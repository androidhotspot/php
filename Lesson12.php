<!DOCTYPE html>
<html>
<head>
	<title>If and Else Functions</title>
</head>
<body>
<?php
$a = 5;
$b = 40;
if ($a > $b) {
	echo "A is Larger than B: " . $a . "<br />";
}
else {
	echo "Before Change: " . $a . "<br />";
	$a = $b + 1;
	echo "After Change: " . $a . "<br />";
}
?>
</body>
</html>