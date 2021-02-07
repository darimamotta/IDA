<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
if (isset ($_GET['name'])) {
$name =$_GET['name'];
echo (" Hello, ".$name.", what are you looking for?"); }
?>
<?php 

$searchTerm ='';

if (isset($_GET['text'])){
	$searchTerm=$_GET['text'];
		if ($searchTerm==''){echo ("no search term");}
else  if ($searchTerm!=''){echo ("<a href='http://www.google.com/search?q=".$searchTerm."'> new link </a>");}
}
?>
<form  method="get" action="ss1920p.php?name=">
<a href="ss1920p.php?name=".$name.> </a>
<input type="text" name="text"><br>
<input type='submit' value='send'>
</form>


</body>
</html>