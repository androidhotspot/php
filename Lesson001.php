<!DOCTYPE html>
<html>
<head>
	<title>Variable Variables PHP Beyond Basics</title>
</head>
<body>
<?php
$name = "Android";
$Android = "This is Android Hot Spot";
echo "This is a normal Variable: " . "<b>". $name . "</b><br />";
echo "This is also another normal Variable: " . "<b>". $Android . "</b><br />";

echo "This is a variable name determined by a variable: " . "<b>". $$name . "</b><br />";
?>
</body>
</html>