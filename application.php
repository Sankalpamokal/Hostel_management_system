<!-- index page homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
				<?php include 'config.php';?>

    <title>Hostel Management System</title>
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
<body id="indexbody">
<header id="indexheader">
    <div id="logodiv">
    <h1 id="title" >Hostel Management System
        <a href="index.html"><img src = "img/RAIT_DarkBg.png" height="17%" width="17%" id="raitlogo" ></a>
    </h1>
        <hr style="border:1px solid white;"/>
    </div>
    <ul id="ulindex">
        <li class="liindex"><a href="admin.php">Profile</a></li>
        <li class="liindex"><a href="application.php" class="active">Application</a></li>
        <li class="liindex"><a href="allocation.php">Allocation</a></li>
        <li class="liindex"><a href="entry.php">Entry Log</a></li>
        <li class="liindex"><a href="report.php">Report</a></li>
        <li class="liindex"><a href="rooms.php">Rooms</a></li>
        <li class="liindex"><a href="payment.php">Payment</a></li>
        <li class="liindex"><a href="vsugession.php">Feedback</a></li>		
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<br/>
<h2 style="text-align:center;font-size:2vw;color:white;">Applications Received</h2>
<br/>

<?php
include_once("config.php"); 

$sql = "SELECT appid, fname, mobile, gender, college FROM application";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>FULL NAME</th>";
                echo "<th>MOBILE</th>";
                echo "<th>GENDER</th>";
                echo "<th>COLLEGE</th>";

				
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['appid'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['college'] . "</td>";
				//echo "<td><a href=info.html>Info </a></td>";

			
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "<h2 style=text-align:center;color:black;>No records matching your query were found.</h2>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
</body>
</html>