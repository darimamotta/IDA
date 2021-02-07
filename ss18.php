<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ws1920 php Motta </title>
</head>
<body>

<?php

$charc="";
    


    if ($_SERVER ['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['radio'])&&($_POST['radio']!==''))

            {   $charc=$_POST['radio'];
                if($charc=='A')
                {

                    $_POST['text']= $charc;
                    echo 'You selected '.$charc;
                }
                   
                else  if ($charc=='B') 
                   {
                	$_POST['text']= $charc;
                    echo 'You selected '.$charc;
                   }
             	     
            } else {echo "You didnt choose button";}




     }
    ?>
<form method='post' action='ss18.php'>



    Text <Input type="text" name="text" value="--><?php echo $charc ?>"> <br>
    Choose button <br>
    <label><Input type="radio" name="radio" value="A">A</label><br>
    <label><Input type="radio" name="radio" value="B">B</label><br>
    <label><Input type="submit" name="submit" value="Append"></label><br>

 


</form>
</body>
</html>
</form>


