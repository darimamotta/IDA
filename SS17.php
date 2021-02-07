<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> SS17 php Motta </title>
</head>
<body>

<?php

$planet=null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
        if(isset($_POST['radio'])&&($_POST["radio"]!='')) {
            $planet=$_POST['radio'];
        
        if ($planet=='Marvel Universe')
       { echo "Correct";}
        
        else  
                {echo "Wrong";} }
            else echo "Choose planet";}
?>

<form method="post" action="SS17.php" > 
Where do the Guardians of the Galaxy live? <br>
<label> <input type="radio" value="DC Universe" name="radio">DC Universe</label><br>
<label>  <input type="radio" value="Marvel Universe" name="radio">Marvel Universe</label><br>
<input type="submit" value="send answers" name="submit">
</form>
</body>
</html>

