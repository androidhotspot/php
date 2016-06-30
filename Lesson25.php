<!DOCTYPE html>
<html>
<head>
	<title>Default Values PHP Essential Training</title>
</head>
<body>
<?php
// Define a function which handles a single parameter
function lang1($lang="HTML"){
	// Get the parameter and prints here.
	echo "My Favorite Programming Language is {$lang}.";
}
// lang1("PHP");
// lang1();

function car($brand="Benz", $color="Blue"){
	// Get the parameter and prints here.
	echo "My Favorite Car is {$brand} in {$color} color.";
}
car("Audi", "Red");
?>

</body>
</html>