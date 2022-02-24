<!--
Author  : abdulsamadmj
Date    : 24-02-2022
Time    : 10:47 PM
Program : fibonacci series using php
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="fnumber">Enter Limit</label>
        <input type="number" name="fnumber">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
    if ($_GET) {
        $limit= $_GET['fnumber'];
        $num1=0; $num2=1; $sum=0;
        echo("<br>Fibonacci Series:   $num1    $num2");
        for ($i=3; $i <= $limit; $i++) { 
            $sum=$num1+$num2;
            $num1=$num2;
            $num2=$sum;
            echo("  $sum");
        }
    }

?>