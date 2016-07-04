<!DOCTYPE html>
<html>
<head>
	<title>Global Variables PHP Essential Training</title>
</head>
<body>
<?php
	// Define a variable outside of the function
	$var = "Outside of the Function";
	function head()	{
		// Define a variable inside of the function
		$var = "Inside of the Function";		
	}
	// calling a function without arguments
	head();
	echo $var . "<br />";
?>
<br />
<?php
	// Define a variable outside of the function
	$var = "Outside of the Function";
	function foot($var1)	{
		// Define a variable inside of the function
		$var1 = "Inside of the Function";
		return $var1;
	}
	// calling a function without arguments
	$var1 = foot($var);
	echo $var1 . "<br />";
?>
<br />
<?php
	// Define a variable outside of the function
	$var = "Outside of the Function";
	function head1()	{
		// Declare the variable $var as a global variable
		global $var;
		// Define a variable inside of the function
		$var = "Inside of the Function";
	}
	// calling a function without arguments
	head1();
	echo $var . "<br />";
?>
</body>
</html>