<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        BIO-DATA

    </title>
</head>

<body>
    <h1>BIO-DATA</h1>
    <table border="1" width="600" align="center" bgcolor="brown">
        <tr>
            <td>Name:</td>
            <td>
                <?php echo $_POST['fullname']; ?>
            </td>
        </tr>
        <tr>
            <td>Father's Name:</td>
            <td>
                <?php echo $_POST['fathername']; ?>
            </td>
        </tr>
        <tr>
            <td>Mother's Name:</td>
            <td>
                <?php echo $_POST['mothername']; ?>
            </td>
        </tr>
        <tr>
            <td>Blood Group:</td>
            <td>
                <?php echo $_POST['bgroup']; ?>
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>
            <?php echo $_POST['address'] ?>
            </td>
        </tr>
        <tr>
            <td>PIN-CODE</td>
            <td>
                <?php echo $_POST['pincode']; ?>
            </td>
        </tr>
        <tr>
            <td>EMAIL:</td>
            <td>
                <?php echo $_POST['email']; ?>
            </td>
        </tr>
        <tr>
            <td>PHONE:</td>
            <td>
                <?php echo $_POST['phnum']; ?>
            </td>
        </tr>
        <tr>
            <td>D.O.B:</td>
            <td>
                <?php echo $_POST['dob']; ?>
            </td>
        </tr>
        <tr>
            <td>GENDER:</td>
            <td>
                <?php echo $_POST['gender']; ?>
            </td>
        </tr>
        <tr width="30">
            <td>KNOWN LANGUAGE:</td>
            <td>
                <?php echo $_POST['lang[1]']; ?>
            </td>
        </tr>
    </table>
</body>
</html>