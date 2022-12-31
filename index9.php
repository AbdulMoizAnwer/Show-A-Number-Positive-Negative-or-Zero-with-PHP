<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Number Negative, Positive or Zero</title>
</head>
<body>
    <h1>Show If A Number is Negative, Positive or Zero</h1>
    <form action="#" method="POST">
        <label>Enter your number</label>
        <input type="text" name="n1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    if($n1 > 0)
        echo $n1 . " is the positive number";
    else if($n1 < 0)
        echo $n1 . " is the negative number";
    else    
        echo "The number provided is Zero";
    }
?>
