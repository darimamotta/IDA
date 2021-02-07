<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ws1819</title>
</head>
<body>
<?php
$prop;
$val;
if (isset ($_GET['prop'])){
	$prop=$_GET['prop'];
	$val=$_GET['val'];
	if($prop==''|$val==''){

	echo ("Please fill in both boxes");}
else  if ($prop!=''&$val!='')
	{echo	("<p style='".$prop.":".$val."''>I use ".$val." for the CSS property ".$prop."</p>");	}
}
?>
<form method="get" action="ws1819p.php">
<label><Input type="text" name="prop"> CSS property </label><br>
<label><Input type="text" name="val">CSS value</label><br>
<input type="submit"  value="show"><br>
</body>
</body>
</html>
