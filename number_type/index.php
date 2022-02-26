<!-- 
Author: midlajc
Date: 26-02-2022
Time:5:45 PM
Program: given number is perfect abundant or deficient
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

function sumOfProperFactors($num)
{
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

?>

<body>
    <form action="" method="post">
        <input type="number" name="number" id="" value="<?php echo $_POST['number'] ?>">
        <input type="submit" value="submit">
    </form>
    <br>
    <div>
        <?php
        if ($_POST) {
            $num = $_POST['number'];
            if ($num == sumOfProperFactors($num)) {
                echo "Given Number is Perfect";
            } elseif ($num > sumOfProperFactors($num)) {
                echo "Given Number is Deficient";
            } else {
                echo "Given Number is Abundant";
            }
        }
        ?>
    </div>
</body>

</html>