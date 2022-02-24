/*
Authour : Mubashir Angathil
Date : 24-02-2022
Time : 08:31 PM
Program : Write java program to create clock with a timing event
*/

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Clock</title>

    <style>
        #clock {
            font-size: 170px;
            width: 900px;
            margin: 200px;
            text-align: center;
            border: 2px solid black;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div id="clock">8:10:45</div>

    <script>
        setInterval(showTime, 1000);

        function showTime() {
            const date = new Date();
            const timeOption = {
                hour: 'numeric',
                minute: 'numeric',
                hour12: true,
                second: 'numeric'
            }

            let currentTime = date.toLocaleString('en-US', timeOption);

            document.getElementById("clock")
                .innerHTML = currentTime;
        }

        showTime();
    </script>
</body>

</html>