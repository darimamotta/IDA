
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> </title>
</head>
<body>
<form action="ss17p.php" method="get">

<?php

    
    
if (isset($_GET['choice']))

{$mychoice=$_GET['choice'];
if ($mychoice=="2"){
	echo "correct";
}
else if ($mychoice=="1")
	{echo "wrong";
echo ("<br><a href='ss17p.php'>try again</a>");}

}

 else {
	echo ("Where do the Guardians of the Galaxy live?<br>");
	echo ("<label><input type='radio' name='choice' value='1'>DC Universe</label><br>");
	echo ("<label><input type='radio' name='choice' value='2'>Marvel Universe</label><br>");
	echo ("<input type='submit' value='send answer'>");

}
?>
</form>
</body>
</html>
