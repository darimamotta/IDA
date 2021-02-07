<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ws1718 php Motta </title>
</head>
<body>
<form action="Ws1718.php" method="post">
<?php

    $val1=0;
   if ($_SERVER ['REQUEST_METHOD']=='POST')
    {
        $val1 = $_POST['increments'];
   
              $val1 += 1;   
    
}
  

?> 
<label><span id="number"> number is <?php echo $val1 ?></span></label><br>
    <label> <a href="Ws1718.php" name="increments"> Increment </a></label>
    
    

</form>
</body>
</html>
