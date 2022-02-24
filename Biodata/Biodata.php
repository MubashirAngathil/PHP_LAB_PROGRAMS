<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Detailes</title>
    <style>
        input[type="text"],
        [type="tel"] ,
        [type="email"]{
            background: white;
            border-color: greenyellow;
            opacity: 0.8;
            height: 2rem;
            width: 15rem;
            border-radius: 1px;
        }
        input[type="submit"],
        [type="Reset"]{
            background: green;
            color: white;
            border: none;
            border-radius: 2rem;
            padding: 1rem;
        }
         body {
            background: black;
            color: white;
        }
    </style>
</head>
<body>
    <center>
        <h1>Personal Details</h1>
        <form action="" method="post">
            <input type="text" placeholder="Enter your first name" name="Firstname" autofocus>
            <input type="text" placeholder="Enter your last name" name="Lastname"><br><br>
            <input type="email" placeholder="email@gmail.com" name="email" >
            <input type="tel" name="phone" placeholder="Enter your phone number"><br><br>
            <label>Male</label>
            <input type="radio" name="gender" value="Male">
            <label>Female</label>
            <input type="radio" name="gender" value="Female"><br><br>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>