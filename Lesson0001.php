<!DOCTYPE html>
<html>
<head>
	<title>Variable Variables PHP Beyond Basics</title>
</head>
<body>
<?php
$lang1 = "PHP";
$lang2 = "MySQL";
$lang3 = "Android";
$lang4 = "HTML5";
$lang5 = "CSS3";
$languages = array('lang1', 'lang3', 'lang5');
foreach ($languages as $language) {
	echo $$language . "<br />";
}
?>
</body>
</html>