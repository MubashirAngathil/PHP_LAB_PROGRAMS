<!DOCTYPE html>
<html lang="en">
<?php
require_once 'session.php';

if ($_SESSION['user'])
    header("Location: index.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .box {
            display: flex;
            width: 20rem;
            height: 20rem;
            border: 1px solid green;
            justify-content: center;
            margin-left: 30rem;
            margin-top: 10rem;
        }
        body{
            background: black;
            color:white
        }
        input[type="password"],
              [type="text"]{
            border-color: green;
            padding: 0.5rem;
            border-radius: 15px;
        }
        input[type="submit"]{
            background: green;
            color:white;
            padding: .7rem;
            border-radius: 2rem;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="box" >
        <form action="doLogin.php" method="post" style="padding: 1rem;">
            <h1>Login</h1><br>
            <div style="padding: .3rem 0;">
                <label for="" style="display: block;">Username</label>
                <input type="text" name="username" placeholder="Enter your name...">
            </div>
            <div style="padding: .3rem 0;">
                <label for="" style="display: block;">Password</label>
                <input type="password" name="password" placeholder="Enter your password...">
            </div>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>