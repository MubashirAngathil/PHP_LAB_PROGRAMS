<!-- 
Author: midlajc
Date: 24-02-2022
Time:8:15 PM
Program: reverse given string 
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

function reverse($str)
{
    $len = strlen($str);

    if ($len == 1) {
        return $str;
    } else {
        $len--;
        return reverse(substr($str, 1, $len))
            . substr($str, 0, 1);
    }
}

?>

<body>
    <form action="" method="post">
        <input type="text" name="text" id="" value="<?php echo $_POST['text'] ?>">
        <input type="submit" value="submit">
    </form>
    <br>
    <div>
        <?php
        if ($_POST) {
            // echo ;
            // echo substr($_POST['text'], 1, 1);
            print_r(reverse($_POST['text']));
        }
        ?>
    </div>
</body>

</html>