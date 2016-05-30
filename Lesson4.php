<!DOCTYPE html>
<html>
<head>
	<title>String Functions - PHP Essential Training</title>
</head>
<body>
<?php
$var = "Hello World...";
echo "{$var} Again <br />";
echo '$var Again... <br />';
echo "$var Again...";
?>

<br />
<?php
$first = "The quick brown fox";
$second = " jumped over the lazy dog";
$third = $first;
$third .= $second;
echo "$third <br />";
?>
<br />
Lower Case: <?php echo strtolower($third); ?><br />
Upper Csae: <?php echo strtoupper($third); ?><br />
Upper Case First-letter: <?php echo ucfirst($third);?><br />
Upper Case Words: <?php echo ucwords($third); ?><br />

Length: <?php echo strlen($third); ?><br />
Trim: <?php echo $four = $first . trim($second); ?><br />
Find: <?php echo strstr($third, "brown"); ?><br />
Replace By String: <?php echo str_replace("quick", "super-fast", $third); ?><br />
String Position: <?php echo strpos("Hello world!","world");	?>
</body>
</html>