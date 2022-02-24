<!DOCTYPE html>
<html lang="en">
<?php
require_once 'session.php';

if (!$_SESSION['user'])
    header("Location: login.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center;">
    <h1>Login as <?php echo $_SESSION['user']['name']; ?></h1>
</body>

</html>