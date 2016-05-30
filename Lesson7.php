<!DOCTYPE html>
<html>
<head>
	<title>Arrays Basics PHP Essential Training</title>
</head>
<body>
<?php
$array1 = array(4, 8, 12, 16, 20, 24);
//Remember the first value in array is starts at position 0.
echo "Array [1]: " . $array1[1] . "<br />";
echo "Array [0]: " . $array1[0] . "<br />";
//Here we have some fun with array inside the array.
$array2 = array(6, "HTML", "PHP", array('Apple', 'Google', 'Twitter'));
echo $array2[1] . "<br />";
//Lets see what is in the pocket number 3
echo $array2[3] . "<br />";
//Here the [3] is mention the value of fourth row in the first column and [1] is defines the second value in the inside array
echo $array2[3][1] . "<br />";
//Assign other values to the existing column in an array
$array2[3] = "Microsoft";
echo $array2[3] . "<br />";
//Now the column four is replaced by "Microsoft"
$array3 = array("first_name" => "Android", "last_name" => "Hotspot");
// Here we access the value by its label name
echo $array3["first_name"];
//You can also use the numbers to position to the values instead of the label
$array3 = array(1 => "Android", "last_name" => "Hotspot");
echo $array3[1] . " " . $array3["last_name"];
print_r($array2);
?>

</body>
</html>