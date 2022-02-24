<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Detailes</title>
    <style>
        input[type="text"],
        [type="tel"],
        [type="email"],
        [type="password"] {
            background: white;
            border-color: greenyellow;
            opacity: 0.8;
            height: 2rem;
            width: 15rem;
            padding-left: 2rem;
            border-radius: 20px;
        }

        input[type="submit"],
        [type="Reset"] {
            background: green;
            color: white;
            border: none;
            border-radius: 1rem;
            padding: 1rem;
        }

        body {
            background: white;
            color: gray;
        }

        .section {
            border: 2px solid black;
            width: 25rem;
            padding-bottom: 2rem;
            margin-top: 4rem;

        }
    </style>

</head>

<body>
    <center>
        <section class="section">

            <h1>Personal Details</h1>
            <form action="" method="post">
                <input type="text" placeholder="Enter your name...." id="Firstname" max="15" autofocus required><br><br>
                <input type="email" placeholder="email@gmail.com" id="email" required><br><br>
                <input type="tel" id="phone" placeholder="Enter your phone number" max="10" required><br><br>
                <input type="password" id="pass_one" placeholder="Enter your password...." max="10" required><br><br>
                <input type="password" id="pass_two" placeholder="Confirm your password..." max="10" required><br><br>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit" onclick=validation()>
            </form>
        </section>
    </center>
    <script>
        function validation() {
            var name=document.getElementById("Firstname").value;

            alert(name + "hello");
        }
    </script>
</body>

</html>