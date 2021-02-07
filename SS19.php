<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ss19 php Motta </title>
</head>
<body>
	

<?php

$val1 = "click";
$val2 = "click me";

if (isset($_GET['text'])) {
	$val2 = $_GET['text'];
	$val2  .= "click";
	$val1 = $val2;
}
?> 

<a href="ss19.php?text=<?php echo $val1 ?>" name="mylink" ><?php echo $val2 ?></a>
    
   
</form>
</body>
</html>

