<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> </title>
</head>
<body>
	<form action="ss20p.php" method="get">
<?php

$apv=0;
$micv=0;
if (isset($_GET['choice'])){

$mychoice=$_GET['choice'];

if ($mychoice=="ap"){$apv=$_GET['appt']; $apv+=1;$micv=$_GET['mict']; }
else if($mychoice=="mic"){
	$micv=$_GET['mict'];
	 $micv+=1; $apv=$_GET['appt'];}}

	

?>

<label>Apple <input type="text" name="appt" value="<?php echo $apv ?>"></label> 
<label> vs.Microsoft <input type="text" value="<?php echo $micv ?>" name="mict"></label><br>
Your choice<br>
<label><input type="radio" name="choice" value="ap">Apple</label><br>
<label><input type="radio" name="choice"  value="mic">Microsoft</label><br>
<input type="submit" value="vote">
</form>
</body>
</html>

