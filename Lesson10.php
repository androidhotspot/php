<!DOCTYPE html>
<html>
<head>
	<title>Type Casting Functions PHP Essential Training</title>
</head>
<body>
<?php
$var1 = "2 Candies For Me ";
$var2 = $var1 + 3;
// echo '$var2: ' . $var2 . "<br />";
// Get the variable type of $var1
// echo '$var1: ' . gettype($var1) . "<br />";
// // Get the variable type of $var2
// echo '$var2: ' . gettype($var2) . "<br />";
// // Set the variable type to $var2 as String
// settype($var2, "string");
// // Get the variable type of $var2 after change the variable type
// echo '$var2: ' . gettype($var2) . "<br />";
// // Assign the variable type of $var1 to $var3
// $var3 = (int) $var1;
// // Get the variable type of $var3
// echo '$var3: ' . gettype($var3) . "<br />";
//Check is it a Array Variable or not
echo "Is Array: " . is_array($var1) . "<br />";
//Check is it a Boolean Variable or not
echo "Is Boolean: " . is_bool($var1) . "<br />";
//Check is it a Float Variable or not
echo "Is Float: " . is_float($var1) . "<br />";
//Check is it a Integer Variable or not
echo "Is Integer: " . is_int($var1) . "<br />";
//Check is it a Null Variable or not
echo "Is Null: " . is_null($var1) . "<br />";
//Check is it a Numeric Variable or not
echo "Is Numeric: " . is_numeric($var1) . "<br />";
//Check is it a String Variable or not
echo "Is String: " . is_string($var1) . "<br />";
?>

</body>
</html>