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
 $fname = $_SESSION['fname'];
 $mobile = $_SESSION['mobile'];
 $college = $_SESSION['college'];
 $collegenumber = $_SESSION['collegenumber'];
 $gender = $_SESSION['gender'];
 $dob = $_SESSION['dob'];
 $bgroup = $_SESSION['bgroup'];
 $password = $_SESSION['password'];
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
        <li class="liindex"><a href="Student.php">Home</a></li>
        <li class="liindex"><a href="edit.php">Edit Profile</a></li>
        <li class="liindex"><a href="rules1.php">Rules</a></li>
        <li class="liindex"><a href="Status.php" >Status</a></li>
        <li class="liindex"><a href="vrooms.php"class="active">Vacant Rooms</a></li>
        <li class="liindex"><a href="apply.php">Apply</a></li>
    <!--    <li class="liindex"><a href="Sugession.php">Sugession</a></li>  -->
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
 <hr style="border:1px solid black;"/>
</header>
<br>

<br>
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
