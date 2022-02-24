<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .box {
            display: flex;
            width: 100%;
            height: 97vh;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="doLogin.php" method="post" style="padding: 1rem;">
            <div style="padding: .3rem 0;">
                <label for="" style="display: block;">Username</label>
                <input type="text" name="username">
            </div>
            <div style="padding: .3rem 0;">
                <label for="" style="display: block;">Password</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>