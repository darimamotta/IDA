<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ws1920 php Motta </title>
</head>
<body>
<?php
$name = $_SERVER['QUERY_STRING'];
$searchTerm = "";
?>
<form method='post' action="ws1920.php?<?php echo $name ?>">
    <label>Hello <?php echo $name ?> what are you looking for</label>
    <label><Input type="text" name="text"  ></label>
    <label><Input type="submit" name="submit"></label><br>

    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if($_POST['text'] !== "")
            {
                $searchTerm=$_POST['text'];
                echo '<a href="https://www.google.com/search?q='.$searchTerm.'">Link</a>';

            } else  echo "no search term";
        }

        ?>

</form>
</body>
</html>
