
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><form>

	<?php
	if (isset($_GET['text'])){
		 $inp=$_GET['text'];
		 echo "<h".$inp.">Heading ".$inp."</h".$inp.">";
	}
	else {
	echo "no heading level specified";
	}
	?>
<br><input type="text" name="text"><br>
<input type="submit" value="submit">
</form>
</body>
</html>
