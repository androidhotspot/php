<!DOCTYPE html>
<html>
<head>
	<title>Return Values PHP Essential Training</title>
</head>
<body>
<?php
// Define a function named addition
function addition($opr1, $opr2)
{
	// Execute the code needs to add the two values
	$sum = $opr1 + $opr2;
	// It doesn't display any values to the browser
	// But return the value out of the function
	return $sum;
}
// Here when we call the function itself we save the return value in the third variable named $var3
$var3 = addition(3, 4);
// Then we can display or whatever we want , we can do with that values
// echo "Addition: " . $var3 . "<br />";
if (addition(9, 11) == 20) {
	// echo "YES" . "<br />";
	// echo $var3;
}
function add_subt($opr1, $opr2)
{
	$add = $opr1 + $opr2;
	$subt = $opr1 - $opr2;
	$result = array($add, $subt);
	return $result;
}
$result1 = add_subt(10, 5);
echo "Addition: " . $result1[0] . "<br />";
echo "Subtraction: " . $result1[1];
?>
</body>
</html>