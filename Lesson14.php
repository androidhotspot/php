<!DOCTYPE html>
<html>
<head>
	<title>Logical Operators Functions PHP Essential Training</title>
</head>
<body>
<?php
$a = 50;
$b = 40;
$c = 20;
$d = 1;
// if (($a > $b) && ($c > $d)) {
// 	echo "A is Larger than B And: " . "$a <br />";
// 	echo "C is Larger than D: " . "$c <br />";
// }
// if(($a < $b) || ($c > $d)){
// 	echo "Neither A is Less than B or: " . "$a <br />";
// 	echo "C is greater than D: " . "$c <br />";
// }
// else{
// 	echo "Above conditions are not correct <br />";
// }

if (!isset($a)) {
	$a = 100;
	echo $a;
}
if (isset($a)) {
	$a = 100;
	echo "Changing value of A is: " . $a . "<br />";
}
if (is_int($a)) {
	settype($a, "string");
}
echo 'Type of $a: ' . gettype($a);
?>
</body>
</html>