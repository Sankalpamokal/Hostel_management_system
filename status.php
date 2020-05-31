<!-- index page homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Status</title>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:white;
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
margin-bottom:100px;
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

<body id="indexbody">
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
        <li class="liindex"><a href="Status.php" class="active">Status</a></li>
        <li class="liindex"><a href="vrooms.php">Vacant Rooms</a></li>
        <li class="liindex"><a href="apply.php">Apply</a></li>
    <!--    <li class="liindex"><a href="Sugession.php">Sugession</a></li>  -->
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<br/>

<h2 style="text-align:center;font-size:2.5vw;color:black;">Hostel room application status<h2>
<?php
include_once("config.php"); 

$sql = "SELECT DISTINCT fname,hbuilding,floorno,roomno,allocated,fpaid,fbalance FROM addroom RIGHT JOIN allocate ON addroom.roomno=allocate.aroomno WHERE username='$username'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Building No</th>";
                echo "<th>Floor No</th>";
                echo "<th>Room No</th>";
                echo "<th>Allocated</th>";
				echo "<th>Fees Paid</th>";
                echo "<th>Fees Balance</th>";
                
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['hbuilding'] . "</td>";
                echo "<td>" . $row['floorno'] . "</td>";
                echo "<td>" . $row['roomno'] . "</td>";
                echo "<td>" . $row['allocated'] . "</td>";
                echo "<td>" . $row['fpaid'] . "</td>";
                echo "<td>" . $row['fbalance'] . "</td>";
                //echo "<td><a href=info.html>Info </a></td>";

            
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        $sql5 = "SELECT DISTINCT status FROM studentreg WHERE username='$username'";
        if($result = mysqli_query($conn, $sql5)){
            echo "<table>";
            echo "<tr>";
                echo "<th>Status</th>";
             echo "</tr>";
        while($row = mysqli_fetch_array($result)){
             echo "<tr>";
             echo "<td>" . $row['status'] . "</td>";
             echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    }
}
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
</body>
</html>