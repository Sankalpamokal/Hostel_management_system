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
.heads{
color:white; 
font-size:2vw;
text-align:center;
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
        <li class="liindex"><a href="admin.php">Profile</a></li>
        <li class="liindex"><a href="application.php">Application</a></li>
        <li class="liindex"><a href="allocation.php">Allocation</a></li>
        <li class="liindex"><a href="entry.php">Entry Log</a></li>		
        <li class="liindex"><a href="report.php" class="active">Report</a></li>
        <li class="liindex"><a href="rooms.php">Rooms</a></li>
        <li class="liindex"><a href="payment.php">Payment</a></li>
        <li class="liindex"><a href="vsugession.php">Feedback</a></li>		
        <li class="liindex"><a href="logout.php">Logout</a></li>
   </ul>
    <hr style="border:1px solid black;"/>
</header>

<h2 style="color:white; font-size:3vw;text-align:center;">Report Generation</h2>
<p class="heads">Generate report student wise:   <br/><input <input type="submit" onclick="window.location.href='sreport.php'" value="View"></p>
<p class="heads">Generate report building wise:   <br/><input type="submit" onclick="window.location.href='building.php'" value="View"></p>
<p class="heads">Generate report college wise:   <br/><input type="submit" onclick="window.location.href='college.php'" value="View"></p>
 <br/>
 <br/>
</body>
</html>
