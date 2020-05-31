<!-- contact page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Apply</title>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:black;
	font-family:Comic Sans MS;

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

<!-- contact page -->



        * {box-sizing: border-box;}

        input[type=text], input[type=email],select,input[type=number], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 10px;
            background-color: #f2f4f9;
            padding: 40px;
            margin-bottom: 100px;
        }
        section{
            margin-left: 25%;
            margin-right: 25%;
        }
        table{
width:70%;
margin:auto;
border:1px solid black;
font-size:1.3vw;
border-collapse:collapse;
background-color:lightgrey;
}
th{
background-color:darkgrey;
}
th,td{
border:1px solid black;
text-align:center;
padding:10px;

}
    
</style>
</head>
<body>

<body id="indexbody">
 <?php
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
 $email = $_SESSION['email'];
 $password = $_SESSION['password'];
 ?>
 
  <?php
 if(!isset($_SESSION['email'])) //If user is not logged in then he cannot access the profile page
 {
 //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 header("location:alogin.php");
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
        <li class="liindex"><a href="admin.php">Profile</a></li>
        <li class="liindex"><a href="application.php">Application</a></li>
        <li class="liindex"><a href="allocation.php">Allocation</a></li>
        <li class="liindex"><a href="entry.php">Entry Log</a></li>
        <li class="liindex"><a href="report.php">Report</a></li>
        <li class="liindex"><a href="rooms.php" class="active">Rooms</a></li>
        <li class="liindex"><a href="payment.php">Payment</a></li>
        <li class="liindex"><a href="vsugession.php">Feedback</a></li>		
        <li class="liindex"><a href="logout.php">Logout</a></li>
   </ul>
 <hr style="border:1px solid black;"/>
</header>
<br>

<br>
<section style="font-family:Comic Sans MS;">

<div class="container">
<h2>Add Room</h2>
<form>
Hostel Building:<br>
      <select name="hbuilding">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select><br>

 <label for="fno">FLOOR NO:</label>
        <input type="number" id="fno" name="floorno" placeholder="Enter floor no" min="0">
 <label for="roomno">ROOM NO:</label>
        <input type="number" id="fname" name="roomno" placeholder="Enter room no" min="0">

        Type of room:<input type="radio" name="room" value="Shared"> Shared
    <input type="radio" name="room" value="Single"> Single<br><br>
    Ac Type:<input type="radio" name="ac" value="AC"> AC Room
    <input type="radio" name="ac" value="Non-Ac"> NonAC Room<br><br>  
     <label for="price">Price</label>
        <input type="number" id="fname" name="price" placeholder="Enter the price" min="0"><br>
<center>        <input type="submit" value="ADD">
</center></div>
</section>
<h2 style="text-align:center;font-size:2.5vw;color:white;">Vacant Rooms</h2>

<?php
include_once("config.php"); 

$sql = "SELECT hbuilding,floorno,roomno,gender,price,room FROM ADDROOM where allocated='No'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Building</th>";
                echo "<th>Floor</th>";
                echo "<th>Room</th>";
                echo "<th>Gender</th>";
				echo "<th>Price</th>";
                echo "<th>Room Type</th>";
                
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['hbuilding'] . "</td>";
                echo "<td>" . $row['floorno'] . "</td>";
                echo "<td>" . $row['roomno'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['room'] . "</td>";
				
                //echo "<td><a href=info.html>Info </a></td>";

            
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
<br/>
<br/><br/>
</body>
</html>
