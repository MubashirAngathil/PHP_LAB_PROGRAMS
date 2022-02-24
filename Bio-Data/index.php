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
</head>
<body>
    <h1>Bio Data Form</h1>
    <form action="biodata.php" method="POST">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname"><br>
        <label for="fathername">Father's Name:</label>
        <input type="text" name="fathername"><br>
        <label for="mothername">Mother's Name:</label>
        <input type="text" name="mothername"><br>
        <label for="bgroup">Blood Group:</label>
        <select name="bgroup">
            <option value="nill" selected></option>
            <option value="a+">A+</option>
            <option value="a-">A-</option>
            <option value="b+">B+</option>
            <option value="b-">B+</option>
            <option value="o+">O+</option>
            <option value="0-">O-</option>
            <option value="ab+">AB+</option>
            <option value="ab-">AB-</option>
        </select><br>
        <label for="phnum">Phone Number:</label>
        <input type="tel" name="phnum"><br>
        <label for="email">Email:</label>
        <input type="email" name="email"><br>
        <label for="dob">D.O.B:</label>
        <input type="date" name="dob"><br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" checked>Male<br>
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="radio" name="gender" value="Other">Other<br>
        <label for="address">Address:</label>
        <textarea name="address" id="address" cols="30" rows="10" placeholder="Type Here.."></textarea><br>
        <label for="pincode">Pincode:</label>
        <input type="number" name="pincode" placeholder="6 - - - - -"><br>
        <label for="gender">Language Known:</label>
        <input type="checkbox" name="lang[]" value="english">English<br>
        <input type="checkbox" name="lang[]" value="tamil">Tamil<br>
        <input type="checkbox" name="lang[]" value="hindi">Hindi<br>
        <input type="checkbox" name="lang[]" value="malayalam">Malayalam<br>
        <input type="checkbox" name="lang[]" value="kannada">Kannada<br>
        <input type="checkbox" name="lang[]" value="telugu">Telugu<br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>