<!DOCTYPE html>
<html>
<head>
	<title>User Defined Functions PHP Essential Training</title>
</head>
<body>
<?php
function hello(){
	echo "Hello World! <br />";
}
hello();
function add($val1, $val2)
{
	// Set of code wants to execute when the function is called
	$val3 = $val1 + $val2;
	echo "Addition: " . $val3 . "<br />";
}
// Function Calling with different set of arguements
add(4, 5);
add(90, 45);
add(450, 970);
add(970, 30);
?>
</body>
</html>