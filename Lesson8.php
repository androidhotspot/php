<!DOCTYPE html>
<html>
<head>
	<title>Arrays Basics PHP Essential Training</title>
</head>
<body>
<?php
$array1 = array(4, 8, 12, 16, 20, 24);
//Count the number of values stored in the array named array1
// echo "Number of Values in an Array: " . count($array1);
// To check the maximum value of the array from the large list
// echo "Maximum Value of an Array: " . max($array1);
// echo "Minimum Value of an Array: " . min($array1);
// Sort the values of the array in Ascending Order
// sort($array1);
// echo ($array1);
// Sort the values of the array in Descending Order
// rsort($array1);
// print_r($array1);
//Implode or insert the character inside the array values
// $string1 = implode(" * ", $array1);
// print_r(explode(" * ", $string1));
echo "Avail or Not: " . in_array(12, $array1);
?>
