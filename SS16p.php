

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Motta ss16.php</title>
</head>
<body>
<form action="ss16p.php" method="get">
<?php

if(isset($_GET['text'])&&$_GET['text']!=""){
$newb=$_GET['text'];
echo ("<input type='submit' value='".$newb."'>");
}
else
{
echo ("<input type='text' name='text'><br>");
echo ("<input type='submit'  value='label me'>");
}
?>
</form>
</body>
</html>