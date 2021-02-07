<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
	<?php
	$under="none";
	if (isset($_GET['text'])) {
$under=$_GET['text'];
if ($under=="none")
	{$undernew="underline";
$under="underline";}
else if($under=="underline")
	{$undernew="none";
$under="none";}

	}else if (!isset($_GET['text'])) {$under="underline";
$undernew=$under;}
	?>
<form method="get">
<a href="ws1617p.php?text=<?php echo $under?>" style="text-decoration:<?php echo $undernew?>"> Toggle Underline </a>
</form>
	</body>
</html>

