<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Hostel Management System</title>
<style>

body#indexbody{
    font-family:Comic Sans MS;
    margin: 0px;
    padding: 0px;
    background-color:black;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1400px;
  height: 50%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.container {
            margin:auto;
            width: 90%;
            border-radius: 10px;
            background-color: lightgray;
            color:black;
            padding: 40px;
            margin-bottom: 100px;
        }
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:black;
}

.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:18px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;color: black;}
.tg th{font-family:Arial, sans-serif;font-size:22px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;color: black;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0pky{text-align:left;vertical-align:top}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin: auto;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
div.points{
    font-size:1.5vw;
    }
h2{
    color:red;
    }


#raitlogo {
    float: left;
    margin-right: 50px;
    margin-top:0px;
}
#title{
    color:white;
    font-size: 5vw;
    margin-bottom: 0px;
    float:right;
    margin-top:15px;
}
header#indexheader{
    background-color: grey;
}

div#logodiv{
    background-color: black;
    margin-bottom: 0px;
}

ul#ulindex {
    list-style-type: none;
    padding: 8px;
    margin: 0px;
    overflow: hidden;
    text-align: center;
    font-size: 1.8vw;
    font-family:Comic Sans MS;

}

li.liindex {
    display:inline-block;
    
}

li.liindex a {

    color: black;
    text-align: center;
    margin-left:30px;
    padding: 10px 10px;
    text-decoration: none;
}

li.liindex a:hover {
    background-color: white;
    transition: 0.4s;
}
.active{
    background-color: white;
}
hr{
margin:0px;
}
</style>
</head>
<body id="indexbody">
<?php
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
?>
 
  <?php
 if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access the profile page
 {
 //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 header("location:login.php");
 }
 ?>
<header id="indexheader">
    <div id="logodiv">
    <h1 id="title" >Hostel Management System
        <a href="index.html"><img src = "img/RAIT_DarkBg.png" height="17%" width="17%" id="raitlogo" ></a>
    </h1>
        <hr style="border:1px solid white;"/>
    </div>
    <ul id="ulindex">
        <li class="liindex"><a href="Student.php" class="active">Home</a></li>
        <li class="liindex"><a href="Edit.php">Edit Profile</a></li>
        <li class="liindex"><a href="rules1.php">Rules</a></li>
        <li class="liindex"><a href="Status.php">Status</a></li>
        <li class="liindex"><a href="vrooms.php">Vacant Rooms</a></li>
        <li class="liindex"><a href="apply.php">Apply</a></li>
    <!--    <li class="liindex"><a href="Sugession.php">Sugession</a></li>  -->
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<br>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/1.jpg" style="width:100%">
  <div class="text">Single Room</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/2.jpg" style="width:100%">
  <div class="text">Hostel Campus</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/3.jpg" style="width:100%">
  <div class="text">Shared Rooms</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
<br>

<div class="container">
  <h2>Features</h2>
  <ul>
    <li>Creation of Building and Block information.</li>

    <li>Provision of various room types (Single / Twin/Single with Air-con Room/Twin with Air-con Room).</li>

    <li>Room allotment to the student.</li>
  </ul>
  <h2>The Administrator can:</h2>
  <ul>
    <li>Allot different students to the different hostels.</li>
    <li>Control the status of the fee payment.</li>
    <li>Edit the details of the students & modify the student records.</li>
  </ul>
  <h2>Other Important Features</h2>
  <ul>
    <li>Less human error</li>

    <li>Strength and strain of manual labor can be reduced</li>

    <li>Reduce data redundancy</li>

    <li>Data consistency</li>

    <li>Easy to handle</li>
 
    <li>Easy data updating</li>

    <li>Easy record keeping</li>

    <li>Backup data can be easily generated</li>
  </ul>
</div>


<div class="container">
  <h2>Price Details:</h2>
  <ul>
    <li>Single Room(With AC):₹3000/per month</li><br>
    <li>Single Room(Without AC):₹2500/per month</li><br>
    <li>Shared Room(With AC):₹2200/per month</li><br>
    <li>Shared Room(Without AC):₹1800/per month</li>
  </ul>  
</div>

<div class="container">
  <h2 align="center">Hostel Details</h2>
<table class="tg">
  <tr>
    <th class="tg-0pky">Hostel Building</th>
    <th class="tg-0pky">Floor</th>
    <th class="tg-0pky">Rooms</th>
    <th class="tg-0pky">AC</th>
    <th class="tg-0pky">Non AC</th>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="3">1</td>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">2</td>
  </tr>
  <tr>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="4">2</td>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">2</td>
  </tr>
  <tr>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">6</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">7</td>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">6</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="3">3</td>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">1</td>
  </tr>
  <tr>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">6</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky" rowspan="4">4</td>
    <td class="tg-0pky">1</td>
    <td class="tg-0pky">6</td>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">2</td>
    <td class="tg-0pky">7</td>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">3</td>
  </tr>
  <tr>
    <td class="tg-0pky">3</td>
    <td class="tg-0pky">8</td>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">4</td>
  </tr>
  <tr>
    <td class="tg-0pky">4</td>
    <td class="tg-0pky">8</td>
    <td class="tg-0pky">5</td>
    <td class="tg-0pky">3</td>
  </tr>
</table>
</div>








<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



</body>
</html>