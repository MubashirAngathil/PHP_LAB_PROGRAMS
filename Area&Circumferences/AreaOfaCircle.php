/*
Author  : Mubashir Angathil
Date    : 24-02-2022
Time    : 08:57 PM
Program : Java script to find area and circumferences of a circle
*/

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title>TypeScript HTML App</title>
    <link rel="stylesheet" href="app.css" type="text/css" />
</head>

<body>
    <h1>Area and circumference of a circle</h1>
    Enter the radius for your circle:
    <input type="text" id="txtRadius" />
    <input type="button" value="Calculate" onClick=Calculation() /><br><br>
    <h3 id="area"></h3>
    <h3 id="circum"></h3>
    <script>
        var RADIUS,radius;
        function Calculation(){

        function CalculateArea() {
            radius = document.getElementById('txtRadius').value;
            RADIUS=(radius * radius * Math.PI)
            // alert("The area of the circle is " + RADIUS);
            document.getElementById("area").innerHTML="Area:"+RADIUS;
        }
        function CalculateCircumference(){
            //c=2pie radius
            var circum=(2*Math.PI*radius);
        //   alert(circum)
        document.getElementById("circum").innerHTML="Circumference: "+circum;

        }
        CalculateArea();
        CalculateCircumference();
        }
    </script>
</body>


</html>