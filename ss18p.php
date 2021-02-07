<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> ss18p.php </title>
</head>
<body>
	<form method="get" action="ss18p.php">
	<?php
	$val1;

	if (isset($_GET['radio'])) {
	 $val1=$_GET['radio'];
	echo ("<input type='text' name='text' value='->".$val1."'><br>");
	echo ("<label><input type='radio' name='radio' value='A'>A</label><br>");
	echo ("<label><input type='radio' name='radio' value='B'>B</label><br>");
	echo ("<input type='submit' value='append'><br>");
} else {
	echo ("<input type='text' name='text' value='->'><br>");
echo ("<label><input type='radio' name='radio' value='A'>A</label><br>");
echo ("<label><input type='radio' name='radio' value='B'>B</label><br>");
echo ("<input type='submit' value='append'><br>");

}

 
	

?>

</form>
</body>
</html>
