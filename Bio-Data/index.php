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
            width: 22rem;
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
            width: 20rem;
            height:0.1rem;
            margin-top: 1rem;;
        }

        .table {
            width: 100%;
        }

        th {
            width: 20%;
        }
        h1{
            font-size: 3rem;;
        }
    </style>
</head>

<body>
    <article>
        <h1 align="center">Bio Data Form</h1>

        <form action="biodata.php" method="POST">
            <table class="table">
                <tr>
                    <th>
                        <label for="fullname">Full Name:</label>
                    </th>
                    <td>
                        <input type="text" name="fullname"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="fathername">Father's Name:</label>
                    </th>
                    <td>
                        <input type="text" name="fathername"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="mothername">Mother's Name:</label>
                    </th>
                    <td>
                        <input type="text" name="mothername"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="bgroup">Blood Group:</label>
                    </th>
                    <td>

                        <select name="bgroup">
                            <option value="null" selected></option>
                            <?php
                            $bgroup = array('A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-');
                            foreach ($bgroup as $key) {
                                $keylower = strtolower($key);
                                echo "<option value=" . $keylower . ">" . $key . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="phnum">Phone Number:</label>
                    </th>
                    <td>
                        <input type="tel" name="phnum" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"><br><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">Email:</label>
                    </th>
                    <td>
                        <input type="email" name="email"><br><br>
                    </td>
                </tr>
                <tr>

                    <th>
                        <label for="dob">D.O.B:</label>
                    </th>
                    <td>
                        <input type="date" name="dob"><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="gender">Gender:</label>
                    </th>
                    <td>
                        <input type="radio" name="gender" value="Male" checked>Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other<br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="address" id="txtarea">Address:</label>
                    </th>
                    <td>
                        <textarea name="address" id="address" cols="45" rows="5" placeholder=" Type your address here....."></textarea><br><br>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="pincode">Pincode:</label>

                    </th>
                    <td>
                        <input type="number" name="pincode" placeholder="6 - - - - -"><br><br>

                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="">Language Known:</label>

                    </th>
                    <td>
                        <input type="checkbox" name="lang[]" value="English">English
                        <input type="checkbox" name="lang[]" value="Tamil">Tamil
                        <input type="checkbox" name="lang[]" value="Hindi">Hindi
                        <input type="checkbox" name="lang[]" value="Malayalam">Malayalam
                        <input type="checkbox" name="lang[]" value="Kannada">Kannada
                        <input type="checkbox" name="lang[]" value="Telugu">Telugu
                    </td>
                </tr>
            </table>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
    </article>
</body>

</html>