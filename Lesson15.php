<!DOCTYPE html>
<html>
<head>
	<title>Switch Statements</title>
</head>
<body>
<?php
	$a = 3;
	switch ($a) {
		case '0':
			echo "a is equals to 0";
			break;
		case '1':
			echo "a is equals to 1";
			break;
		case '2':
			echo "a is equals to 2";
			break;
		default:
			echo "Either a is not 0, 1, or 2";
			break;
	}
?>
</body>
</html>