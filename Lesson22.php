<!DOCTYPE html>
<html>
<head>
	<title> PHP Essential Training</title>
</head>
<body>
<?php
$name = "GOOGLE";
function example1($arg1, $arg2, $name)
{
	echo $arg1 . $arg2 . $name . "<br />";
}
example1("The #1 ", "Search Engine " , $name);
// Define a function named arithmetic
function arithmetic($oper, $opr1, $opr2)
{
	// Take one of the given argument as a condition for checking
	// If the condition is true then execute the following block of code
	if ($oper == 'add') {
		$opr3 = $opr1 + $opr2;
		echo "Additon: " . $opr3 . "<br />";
	}
	// Or else check whether this condition is true, 
	// if it is then execute this block of code
	elseif ($oper == 'sub') {
		$opr3 = $opr1 - $opr2;
		echo "Subtraction: " . $opr3 . "<br />";
	}
	elseif ($oper == 'mul') {
		$opr3 = $opr1 * $opr2;
		echo "Multiplication: " . $opr3 . "<br />";
	}
	elseif ($oper == 'div') {
		$opr3 = $opr1 / $opr2;
		echo "Division: " . $opr3 . "<br />";
	}
	else {
		echo "The Operator is not Valid";
	}
}
arithmetic('add', 4, 5);
arithmetic('sub', 5, 4);
arithmetic('mul', 5, 4);
arithmetic('div', 200, 4);
arithmetic('+', 200, 4);
?>
</body>
</html>