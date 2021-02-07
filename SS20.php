<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ss20 php Motta </title>
</head>
<body>
<form action="ss20.php" method="post">
<?php
    $val1=0;
    $val2=0;


    if ($_SERVER ['REQUEST_METHOD']=='POST')
    {
        $val1 = $_POST['Apple'];
        $val2 = $_POST['Microsoft'];


        if(isset($_POST['votes']))
        {
            $votes = $_POST['votes'];
            if ($votes == "Apple")
                $val1+=1;
            else
                $val2+=1;
        }
    }

?>

    <label>Apple<Input type="text" name="Apple" value="<?php echo $val1 ?>"></label>
    <label>vs Microsoft<Input type="text" name="Microsoft" value="<?php echo $val2 ?>"></label><br>
    <label>Apple </label><Input type="radio" name="votes" id=1 value="Apple">
    <label>Microsoft </label><Input type="radio" name="votes" id=2 value="Microsoft">
    <Input type="submit"value="vote">

</form>
</body>
</html>

