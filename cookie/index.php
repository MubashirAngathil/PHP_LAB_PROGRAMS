<!--
Author  : midlajc
Date    : 01-03-2022
Time    : 11:39 AM
Program : php program to store current date time in cookie and display the last visited date time on the web page upon revisiting same web page
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    include_once 'header.php';
    echo "<br/>Home<br/><br/>Last Visited Time:" . $_COOKIE['home'];
    setcookie("home", date("Y-m-d h:i:sa"), time() + (10 * 365 * 24 * 60 * 60))
    ?>
</body>

</html>