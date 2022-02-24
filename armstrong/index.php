<!-- 
Author: midlajc
Date: 24-02-2022
Time:8:15 PM
Program: reverse given string 
 -->
<?php
function countDigits($num)
{
    $num = (int)$num;
    $count = 0;

    while ($num != 0) {
        $num = (int)($num / 10);
        $count++;
    }
    return $count;
}

function isArmstrong($num, $count)
{

    $sum = 0;
    $num = (int)$num;
    while ($num != 0) {
        $digit = (int)($num % 10);
        $temp = $digit;
        for ($i = 1; $i < $count; $i++) {
            $temp *= $digit;
        }
        $sum += $temp;
        $num = (int)($num / 10);
    }
    if ($sum == $GLOBALS['num']) {
        return true;
    } else
        return false;
}

if ($_POST['number'] != null) {
    $num = $_POST['number'];
    $count = countDigits($num);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter a Number" id="" value="<?php echo $num ?>">
        <input type="submit" value="submit">
    </form>
    <br>
    <div>
        <?php
        if ($_POST)
            if (isArmstrong($num, $count)) {
                echo 'Given Number ' . $num . ' is Armstrong';
            } else if ($_POST) {
                echo 'Given Number ' . $num . ' is not an Armstrong';
            }
        ?>
    </div>
</body>

</html>