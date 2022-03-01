<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
<?php
    include_once 'header.php';
    echo "<br/>About<br/><br/>Last Visited Time:" . $_COOKIE['about'];
    setcookie("about", date("Y-m-d h:i:sa"), time() + (10 * 365 * 24 * 60 * 60))
    ?>
</body>
</html>