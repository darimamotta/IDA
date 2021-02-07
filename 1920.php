<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>	
<?php

	if (!empty($_GET['text'])){
		$searchTerm=$_GET['text'];
		echo "<a href='https://www.google.com/search?q=".$searchTerm."'>".$searchTerm."</a>";}
	
		else 
			{$user = $_SERVER['QUERY_STRING'];
	
	echo "Hello ".$user.", what are you looking for?";
	echo "<br><input type='text' name='text'><br>";
	echo "<input type='submit'>";}
	
	

?>

</form>
</body>
</html>		
