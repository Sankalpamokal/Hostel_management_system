<!-- contact page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
				<?php include 'config.php';?>

    <title>Student Info</title>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:black;
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

        input[type=text], input[type=email],input[type=file], input[type=number], textarea,select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] ,button{
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
    
</style>
</head>
<?php
include('config.php');
session_start();
$username = $_SESSION['username']; //retrieve the session variable
$appid = $_SESSION['appid']; //Storing the username value in session variable so that it can be retrieved on other pages
$fname= $_SESSION['fname'];
$username= $_SESSION['username'];
$mobile = $_SESSION['mobile'];
$gender = $_SESSION['gender'];
$econtact = $_SESSION['econtact'];
$gname = $_SESSION['gname'];
$grelation = $_SESSION['grelation'];
$gcontact = $_SESSION['gcontact'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$pincode = $_SESSION['pincode'];
$college = $_SESSION['college'];
$collegenumber = $_SESSION['collegenumber'];
$collegeid = $_SESSION['collegeid'];
$hbuilding = $_SESSION['hbuilding'];
$fno = $_SESSION['fno'];
$room = $_SESSION['room'];
$ac = $_SESSION['ac'];
$food = $_SESSION['food'];
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
        <li class="liindex"><a href="admin.php">Profile</a></li>
        <li class="liindex"><a href="application.php">Application</a></li>
        <li class="liindex"><a href="allocation.php" class="active">Allocation</a></li>
        <li class="liindex"><a href="entry.php">Entry Log</a></li>
        <li class="liindex"><a href="report.php">Report</a></li>
        <li class="liindex"><a href="rooms.php">Rooms</a></li>
        <li class="liindex"><a href="payment.php">Payment</a></li>
        <li class="liindex"><a href="vsugession.php">Feedback</a></li>		
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
     <hr style="border:1px solid black;"/>
</header>
<section style="font-family:Comic Sans MS;">
<h2 style="font-size: 2vw; margin-top: 15px;margin-bottom: 20px;color: white;">Student Information</h2>

<div class="container">
    <form action=" " method="post">
	<h1 style="font-size:2vw; text-align:center;">Student Section</h1><hr>
	<h2>Personal Info</h2>
        <label for="name">Name</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" placeholder="Enter Your Name" disabled>

        <label for="email">Email</label>
        <input type="email" id="email" name="username" value="<?php echo $username ?>" placeholder="Enter Your Email" disabled><br/>

        <label for="number">Mobile No</label>
        <input type="number" id="number" name="mobile" value="<?php echo $mobile ?>" placeholder="Enter Your Mobile Number" disabled>
		
<label>Gender : </label>
<input type="text" name="gender" value="<?php echo $gender ?>" disabled>
<label>Emergency Contact: </label>
<input type="text" name="econtact" value="<?php echo $econtact ?>" id="econtact" required="required" disabled>

<label>Guardian  Name : </label>
<input type="text" name="gname" id="gname" value="<?php echo $gname ?>"required="required" disabled>


<label>Guardian  Relation : </label>
<input type="text" value="<?php echo $grelation ?>" name="grelation" id="grelation"  required="required" disabled>


<label>Guardian Contact no : </label>
<input type="text" name="gcontact" value="<?php echo $gcontact ?>" id="gcontact" required="required" disabled>
    <br/>
	
		<h2>Correspondance Address</h2>
<label>Address : </label>
<input type="text" name="address" value="<?php echo $address ?>"  id="address" required disabled>

<label>City : </label>
<input type="text" name="city" value="<?php echo $city ?>" id="city" required="required" disabled>
	
<label>State </label>
<div class="col-sm-8">
<input type="text" name="state" id="state" value="<?php echo $state ?>" required disabled> 
					

<label>Pincode : </label>
<input type="text" name="pincode" value="<?php echo $pincode ?>" id="pincode" required="required" disabled>

	<h2>College Info</h2>
	<p>College Name:
<input type="text" name="college" value="<?php echo $college ?>" disabled>
 </p>
	College RollNumber: <input type="text" name="collegenumber" value="<?php echo $collegenumber ?>" disabled><br>
College ID:
<?php  
					 include 'config.php';

                $query = "SELECT collegeid FROM studentreg where username = '$username'";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                                    <center><img src="data:image/jpeg;base64,'.base64_encode($row['collegeid'] ).'" ="200" width="200" class="img-thumnail" /></center>  
                     ';  
                }  
                ?> 
	<h2>Hostel Info</h2>

    Hostel Building:<br>
      <input type="text" name="hbuilding" value="<?php echo $hbuilding ?>" disabled>
        <br><br>
    Floor Number:<br>
      <input type="text" name="fno" value="<?php echo $fno ?>" disabled>
        <br><br>
 
    Type of room:
	<input type="text" name="room" value="<?php echo $room ?>" disabled><br/>

	Ac/Non-Ac:
	<input type="text" name="ac" value="<?php echo $ac ?>" disabled><br/>
	Food:
	<input type="text" name="food" value="<?php echo $food ?>" disabled><br/>


  <br>
 
</div>
</section>

</body>
</html>