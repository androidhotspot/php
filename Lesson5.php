<!DOCTYPE html>
<html>
<head>
	<title>Numbers</title>
</head>
<body>
	
	Basic Math: <?php echo((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
	<br />

	Addition +=: <?php $var2 += 4; echo $var2; ?><br />
	Subtraction -=: <?php $var2 -= 4; echo $var2; ?><br />
 	Multiplication *=: <?php $var2 *= 4; echo $var2; ?><br />
	Division /=: <?php $var2 /= 4; echo $var2; ?><br />
	<br />
	Increment: <?php $var2++; echo $var2; ?><br />
	Decrement: <?php $var2--; echo $var2; ?>
</body>
</html>