<?php
include 'header.php';
?>
<?php
	$ages = array(22, 26, 43, 54, 65, 76);
	//using each value
	foreach ($ages as $age) {
		echo $age . "<br />";
	}
		$ages = array(22, 26, 43, 54, 65, 76);
	//using each value
	foreach ($ages as $position => $age) {
		echo $position . ": " . $age . "<br />";
	}

	$prices = array("Cost of an iphone " => 800, "Cost of an Android "=> 800, "Are they worth for the money? " => 'yes');
	foreach ($prices as $key => $value) {
		if (is_int($value)) {
			echo $key . ": $" . $value . "<br />";
		}
		else{
			echo $key . ": " . $value . "<br />";
		}
	}
?>
</body>
</html>