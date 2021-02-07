<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
$newincrement='1';
if (isset($_GET['increment'])){
	$newincrement=$_GET['increment'];
	$newincrement+=1;
}
?>
<a href="ws1718p.php?increment=<?php echo $newincrement ?>"> Increment <?php echo $newincrement ?></a>
</body>
</html>
