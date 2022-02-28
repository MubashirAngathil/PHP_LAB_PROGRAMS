<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BIO-DATA </title>
    <style>
        table {
            background: whitesmoke;
            border: 0;
            margin-left: 20rem;
        }

        table th {
            padding: 1rem;
            background: gray;
            color: white;
        }
    </style>

</head>

<body align="center">
    <h1>BIO-DATA</h1>
    <table border="1" width="600">
        <tr>
            <th>Name:</th>
            <td>
                <?php echo $_POST['fullname']; ?>
            </td>
        </tr>
        <tr>
            <th>Father's Name:</th>
            <td>
                <?php echo $_POST['fathername']; ?>
            </td>
        </tr>
        <tr>
            <th>Mother's Name:</th>
            <td>
                <?php echo $_POST['mothername']; ?>
            </td>
        </tr>
        <tr>
            <th>Blood Group:</th>
            <td>
                <?php echo $_POST['bgroup']; ?>
            </td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>
                <?php echo $_POST['address'] ?>
            </td>
        </tr>
        <tr>
            <th>Pin-Code</th>
            <td>
                <?php echo $_POST['pincode']; ?>
            </td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>
                <?php echo $_POST['email']; ?>
            </td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>
                <?php echo $_POST['phnum']; ?>
            </td>
        </tr>
        <tr>
            <th>D.O.B:</th>
            <td>
                <?php echo $_POST['dob']; ?>
            </td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td>
                <?php echo $_POST['gender']; ?>
            </td>
        </tr>
        <tr width="30">
            <th>Known Language:</th>
            <td>
                <?php
                echo implode(', ', $_POST['lang']);
                ?>
            </td>
        </tr>
    </table>
</body>

</html>