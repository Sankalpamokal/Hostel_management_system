<!-- report page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Generate report</title>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
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


 input[type=submit],button {
 font-size:1.5vw;
	width:30%;
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
.heads{
color:white; 
font-size:2vw;
text-align:center;
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
        <li class="liindex"><a href="admin.php">Edit Profile</a></li>
        <li class="liindex"><a href="application.php">Application</a></li>
        <li class="liindex"><a href="allocation.php">Allocation</a></li>
        <li class="liindex"><a href="report.php" class="active">Report Generation</a></li>
        <li class="liindex"><a href="rooms.php">Rooms</a></li>
        <li class="liindex"><a href="vsugession.php">Feedback</a></li>		
        <li class="liindex"><a href="logout.php">Logout</a></li>
   </ul>
    <hr style="border:1px solid black;"/>
</header>
<h2 style="text-align:center;font-size:2vw;">REPORT BUILDING WISE</h2>
<?php
include_once("config.php"); 

$sql = "SELECT hbuilding,floorno,roomno,allocated,fname,username,mobile FROM addroom LEFT JOIN allocate ON addroom.roomno=allocate.aroomno";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Building No</th>";
                echo "<th>Floor No</th>";
                echo "<th>Room No</th>";
                echo "<th>Allocated</th>";
                echo "<th>Student</th>";
                echo "<th>Email</th>";
                echo "<th>Mobile</th>";

				
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['hbuilding'] . "</td>";
                echo "<td>" . $row['floorno'] . "</td>";
                echo "<td>" . $row['roomno'] . "</td>";
                echo "<td>" . $row['allocated'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
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
<center><button onclick="myFunction()">Print </button></center></br>
<script>
function myFunction(){
	window.print();
}
</script>
</body>
</html>
