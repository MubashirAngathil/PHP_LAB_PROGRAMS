/*
Authour : Mubashir Angathil
Date    : 25-02-2022
Time    : 12:25 AM
Program : java script to form validation
*/

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
        [type="Reset"],
        [type="Button"] {
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
                <label id="nameLabel"></label>
                <input type="text" placeholder="Enter your name...." id="Firstname" max="15" autofocus required><br><br>
                <label id="emailLabel"></label>
                <input type="email" placeholder="email@gmail.com" id="email" required><br><br>
                <input type="tel" id="phone" placeholder="Enter your phone number" max="10" required><br><br>
                <input type="password" id="pass_one" placeholder="Enter your password...." max="10" required><br><br>
                <input type="password" id="pass_two" placeholder="Confirm your password..." max="10" required><br><br>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit" id="submit" onclick=validation()>
            </form>
        </section>
    </center>
    <script>
        function validation() {
            // name validation
            var label = document.getElementById("nameLabel");
            var labele = document.getElementById("emailLabel");
            var name = document.getElementById("Firstname");
            var submit = document.getElementById("submit");
            var mail = document.getElementById("email");
            var pass = document.getElementById("pass_one");
            var pass2 = document.getElementById("pass_two");
            var len = name.value.length;

            if (len > 5) {
                alert("Max length 15!!");
                submit.type = "button";
                name.style.background = "red";
                label.style.color = "red";
                label.innerText = "*Error"
                submit.style.backgroundColor = "red";
            } else {
                submit.type = "submit";
                name.style.background = "white";
                label.innerText = ""
                submit.style.backgroundColor = "green";
            }
            // email validation
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
                alert("You have entered an invalid email address!");
                labele.style.color = "red";
                labele.style.innerText = "*Error";
            }
            if (pass.value === pass2.value && pass.value.length === pass2.value.length) {
                alert(pass.value, pass2.value);
            } else {
                pass2.style.background = "red";
                submit.type = "button";
                name.style.background = "red";
            }

        }
    </script>
</body>

</html>