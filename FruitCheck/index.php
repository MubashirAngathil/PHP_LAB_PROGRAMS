<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Select</title>
    <style>
        body{
            text-align: center;
        }
        #checkboxes{
            width: min-content;
        }
    </style>
</head>

<body>
    <form action="index.php" method="POST">
        <h3><label for="fruits[]">Select Fruits</label></h3>
        <input type="checkbox" name="fruits[]" value="Apple">Apple <br>
        <input type="checkbox" name="fruits[]" value="Orange">Orange <br>
        <input type="checkbox" name="fruits[]" value="Banana">Banana <br>
        <input type="checkbox" name="fruits[]" value="Dates">Dates <br>
        <input type="checkbox" name="fruits[]" value="Guava">Guava <br>
        <input type="checkbox" name="fruits[]" value="Mango">Mango <br>
        <input type="checkbox" name="fruits[]" value="Watermelon">Watermelon <br><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <?php
    if ($_POST) {
        $fruits=implode(', ', $_POST['fruits']);
        echo "<h1>Selected Fruits,</h1>
        <p><b>
            $fruits
        </b></p>";
    }
    ?>
</body>

</html>