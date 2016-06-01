<!DOCTYPE html>
<html>
<head>
	<title>Boolean and NULL Functions PHP Essential Training</title>
</head>
<body>
<?php
// // Here actually we assign the true to $bool1 and false for $bool2
// $bool1 = true;
// $bool2 = false;
// echo '$bool1: ' . $bool1 . "<br />";
// echo '$bool2: ' . $bool2 . "<br />";
$var1 = 3;
$var2 = "cat";
$var4 = 0;
$var5 = "0";
$var6 = NULL;
$var7 = 10;
// // Check the $var1 is consist any value or not
// echo '$var1 is set: ' . isset($var1) . "<br />";
// // Check the $var2 is consist any value or not
// echo '$var2 is set: ' . isset($var2) . "<br />";
// //Here we didn't initialize a variable $var3 so it returns the false means nothing on display
// echo '$var3 is set: ' . isset($var3) . "<br />";
unset($var2);
// Check the $var1 is consist any value or not
//echo '$var1 is set: ' . isset($var1) . "<br />";
// Check the $var2 is consist any value or not
//echo '$var2 is set: ' . isset($var2) . "<br />";
// Here we didn't initialize a variable $var3 so it returns the false means nothing on display
//echo '$var3 is set: ' . isset($var3) . "<br />";
// The empty will help you to check the variable is empty or not
// echo '$var2 is empty: ' . empty($var2) . "<br />";
echo '$var4 is empty: ' . empty($var4) . "<br />";
echo '$var5 is empty: ' . empty($var5) . "<br />";
echo '$var6 is empty: ' . empty($var6) . "<br />";
echo '$var7 is empty: ' . empty($var7) . "<br />";
?>

</body>
</html>