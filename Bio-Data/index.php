<!--
Author  : abdulsamadmj
Date    : 24-02-2022
Time    : 11:11 PM
Program : Bio-data generation php
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Data</title>
    <style>
        article {
            border: 1px solid black;
            width: 37rem;
            margin-left: 25rem;
            padding-left: 2rem;
            padding-top: 2rem;
        }

        select {
            width: 12rem;
            padding: .5rem;
        }

        #txtarea {
            margin-top: 10rem;
        }

        input[type="submit"],
        [type="reset"] {
            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            background: green;
            border-radius: 2rem;
            color: white;
            margin-left: 8rem;
            margin-top: 2rem;
        }

        input[type="text"],
        [type="phone"],
        [type="tel"],
        [type="email"],
        [type="date"],
        [type="number"] {
            padding: 1rem;
            width: 9.7rem
        }
    </style>
</head>

<body>
    <article>
        <h1 align="center">Bio Data Form</h1>

        <form action="biodata.php" method="POST">
            <label for="fullname">Full Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
            <input type="text" name="fullname"><br><br>
            <label for="fathername">Father's Name&nbsp;&nbsp;&nbsp;:</label>
            <input type="text" name="fathername"><br><br>
            <label for="mothername">Mother's Name&nbsp;&nbsp;:</label>
            <input type="text" name="mothername"><br><br>
            <label for="bgroup">Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <select name="bgroup">
                <option value="null" selected></option>
                <?php
                $bgroup = array('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-');
                foreach ($bgroup as $key) {
                    $keylower = strtolower($key);
                    echo "<option value=" . $keylower . ">" . $key . "</option>";
                }
                ?>
            </select><br><br>
            <label for="phnum">Phone Number&nbsp;&nbsp;&nbsp;:</label>
            <input type="tel" name="phnum" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"><br><br><br>
            <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="email" name="email"><br><br>
            <label for="dob">D.O.B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="date" name="dob"><br><br>
            <label for="gender">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other<br><br>
            <label for="address" id="txtarea">Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <textarea name="address" id="address" cols="30" rows="5" placeholder=" Type your address here....."></textarea><br><br>
            <label for="pincode">Pincode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <input type="number" name="pincode" placeholder="6 - - - - -"><br><br>
            <label for="gender">Language Known&nbsp;&nbsp;:</label>
            <input type="checkbox" name="lang[]" value="english">English
            <input type="checkbox" name="lang[]" value="tamil">Tamil
            <input type="checkbox" name="lang[]" value="hindi">Hindi
            <input type="checkbox" name="lang[]" value="malayalam">Malayalam
            <input type="checkbox" name="lang[]" value="kannada">Kannada
            <input type="checkbox" name="lang[]" value="telugu">Telugu
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </article>
</body>

</html>
