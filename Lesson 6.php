<!DOCTYPE html>
<html>
<head>
	<title>Floating Point Numbers PHP Essential Training</title>
</head>
<body>
	<?php
	$var1 = 3.14;
	// This is a general float number example.
	echo "Floating Numbers: " . $var1 . "<br />";

	// The Round function is used to round the value at certain decimal points. It stops the continuing float numbers.
	echo "Round: " . round($var1, 1) . "<br />";

	// Ceiling is the function of round the given float value to its next whole number like the following.
	echo "Ceiling: " . ceil($var1) . "<br />";

	// Floor is the opposite function of the Ceil. It gives the previous whole number of the given decimal point value.
	echo "Floor: " . floor($var1) . "<br />";

	// abs is a function to give the absolute value of the given expression.
	echo "Absolute: " . abs(10+300.45) . "<br />";

	// Here we get exponential value for the given power value. We use base and exp values for this.
	echo "Exponential: " . pow(2, 2) . "<br />";

	// We have a square root function to get the root of the given value.
	echo "Square Root: " . sqrt(100) . "<br />";

	// Modulo is an operator in division operation. But it is used for get the remaining values.
	echo "Modulo: " . fmod(20, 7) . "<br />";

	// It is used for generates the random values in any of the regions.
	echo "Random (any): " . rand(). "<br />";

	// This is also a random generator but it generates within the given minimum and maximum range.
	echo "Random (min, max): " . rand(1, 100). "<br />";
	?>
</body>
</html>


<!-- Copyrights Reserved by Androidhotspot.com 2016 For Related PHP tutorials Subscribe Us. -->