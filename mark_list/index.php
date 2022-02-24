<!-- 
Author: midlajc
Date: 24-02-2022
Time:12:41 PM
Program: mark list php
 -->

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
        <form action="mark_list.php" method="post" style="padding: 1rem;">
            <div style="padding: .3rem 0;">
                <label for="" style="display: block;">Register No</label>
                <input type="text" name="reg_no">
            </div>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>