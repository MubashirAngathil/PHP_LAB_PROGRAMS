<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $array = array('Samad','Midlaj','Mubashir','Akhil','Riyas','Ali','Arshad','Samad','Midlaj','Manoj');
        echo '<h3>Traversing using foreach,</h3>';
        foreach ($array as $key ) {
            echo "$key, ";
        }
        echo '<br><br><h3>Sorted Order,</h3>';
        $array2=$array;
        sort($array);
        foreach ($array as $key) {
            echo "$key, ";
        }
        echo '<br><br><h3>Without Duplicate Elements,</h3>';
        $array3=array_unique($array2);
        foreach ($array3 as $key) {
            echo "$key, ";
        }
        echo '<br><br><h3>Deleting Last Element,</h3>';
        unset($array2[count($array2)-1]);
        foreach ($array2 as $key) {
            echo "$key, ";
        }
        echo '<br><br><h3>Searching in Array</h3>';
        $key='Arshad';
        echo "$key found at ",array_search($key,$array)+1," position.";
    ?>
</body>
</html>