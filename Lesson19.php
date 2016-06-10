<!DOCTYPE html>
<html>
<head>
	<title>Continue Break Functions PHP Essential Training</title>
</head>
<body>
<?php
	// Initialize the variable and check the condition is true and start the execution
	for ($count=0; $count <=10 ; $count++) { 
		// If the $count value is 5 then it says the loop to continue
		if ($count == 5) {
			// continue keyword to say don't execute any other codes in the block and continue the loop execution
			continue;
		}
		// Or else simply executes the following block of codes
		else{
			// It display the value of $count
			// echo $count . "<br />";
		}
	}
	for ($var1=0; $var1 <= 10 ; $var1++) { 
		if ($var1 == 5) {
			break;
		}
		// echo $var1 . "<br />";
	}

	for ($var2=0; $var2 <= 10 ; $var2++) { 
		// echo $var2;
		if ($var2 == 10) {
			break;
		}
		// echo ", ";
	}

	$array1 = array('JAVA', 'PHP', 'MYSQL', 'C#');
	foreach ($array1 as $ar) {
		echo $ar . "<br />";
		if ($ar == 'PHP') {
			echo "Here we found our Gem. No need to find any more";
			break;
		}
	}


?>
</body>
</html>