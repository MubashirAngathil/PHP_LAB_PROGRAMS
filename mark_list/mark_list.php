<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            display: flex;
            width: 100%;
            height: 97vh;
            justify-content: center;
            align-items: center;
        }
    </style>
    <?php
    require_once 'db.php';
    if (!$_POST['reg_no'])
        header("Location: index.php");

    $reg_no = $_POST['reg_no'];

    $query = 'select * from mark_list where reg_no="' . $reg_no . '"';
    $mark_list = mysqli_query($conn, $query);
    ?>
</head>

<body>
    <div class="box">
        <table border="1">
            <thead>
                <tr>
                <th>Reg No</th>
                <th>Name</th>
                <th>Semester</th>
                <th>Mark</th>
                <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($mark_list)) {
                    $html = "<tr><td>" . $row['reg_no'] . "</td><td>"
                        . $row['name'] . "</td><td>" . $row['sem'] .
                        "</td><td>" . $row['mark'] . "</td><td>" .
                        $row['grade'] . "</td></tr>";
                    echo $html;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>