<!-- contact page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  			<?php include 'config.php';?>

    <meta charset="UTF-8">
    <title>Apply</title>
<style>
body#indexbody{
    font-family:Comic Sans MS;
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
 $status = $_SESSION['status'];
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
        <li class="liindex"><a href="Status.php">Status</a></li>
        <li class="liindex"><a href="vrooms.php">Vacant Rooms</a></li>
        <li class="liindex"><a href="apply.php" class="active">Apply</a></li>
    <!--    <li class="liindex"><a href="Sugession.php">Sugession</a></li>  -->
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<section style="font-family:Comic Sans MS;">
<h2 style="font-size: 2vw; margin-top: 15px;margin-bottom: 20px;color: white;">Book Hostel</h2>


  <?php
 if($status!='Not Applied') //If user is not logged in then he cannot access the profile page
 {
 //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 $msg="Already applied";
 echo"<script type='text/javascript'>alert('$msg');</script>";
 header("location:status.php");

 }
 ?>
<div class="container">
    <form action="applydata.php" method="post">
	<h2>Personal Info</h2>
        <label for="name">Name</label>
        <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" placeholder="Enter Your Name">

        <label for="email">Email</label>
        <input type="email" id="email" name="username" value="<?php echo $username ?>" placeholder="Enter Your Email"><br/>

        <label for="number">Mobile No</label>
        <input type="number" id="number" name="mobile" value="<?php echo $mobile ?>" placeholder="Enter Your Mobile Number">
    <label>Gender : </label>
<select name="gender" value="<?php echo $gender ?>">
  <option value="<?php echo $gender ?>" ><?php echo $gender ?></option>
  <option value="Male" >Male</option>
  <option value="Female">Female</option>
</select></p>

<label>Emergency Contact: </label>
<input type="text" name="econtact" id="econtact" required="required">

<label>Guardian  Name : </label>
<input type="text" name="gname" id="gname" required="required">


<label>Guardian  Relation : </label>
<input type="text" name="grelation" id="grelation"  required="required">


<label>Guardian Contact no : </label>
<input type="text" name="gcontact" id="gcontact" required="required">
    <br/>
		<h2>Correspondance Address</h2>
<label>Address : </label>
<textarea  rows="5" name="address"  id="address" required></textarea>

<label>City : </label>
<input type="text" name="city" id="city" required="required">
	
<label>State </label>
<div class="col-sm-8">
<select name="state" id="state" required> 
<option value="Maharashtra">Maharashtra</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Punjab">Punjab</option>
<option value="Hydrabad">Hydrabad</option>
<option value="Gujrat">Gujrat</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikhim">Sikhim</option>

</select>							

<label>Pincode : </label>
<input type="text" name="pincode" id="pincode" required="required">

	<h2>College Info</h2>
	<p>College Name:
<select name="college" value="<?php echo $college ?>">
  <option value="<?php echo $college ?>" ><?php echo $college ?></option>
  <option value="RAIT" >RAIT</option>
  <option value="LAW">LAW</option>
  <option value="DENTAL">DENTAL</option>
  <option value="POLYTECHNIC">POLYTECHNIC</option>
</select></p>
	College RollNumber: <input type="text" name="collegenumber" value="<?php echo $collegenumber ?>"><br>
College ID:
                     
                <?php  
					 include 'config.php';

                $query = "SELECT collegeid FROM studentreg where username = '$username'";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          
                                  <center>  <img src="data:image/jpeg;base64,'.base64_encode($row['collegeid'] ).'" width="200" /> </center> 
                              
                     ';  
                }  
                ?> 

  <!--  <p>College Id:</p><input name="collegeid" type="file"><br> -->
	
	<h2>Hostel Info</h2>

    Hostel Building:<br>
      <select name="hbuilding" id="hbuilding" required>
  <?php

$hbuilding=mysqli_query($conn,"select DISTINCT hbuilding from addroom where gender='$gender'");
while($row=mysqli_fetch_array($hbuilding))
{	
?>
<option><?php echo $row["hbuilding"]; ?></option>
<?php
}
?>	
        </select>
    
 Floor Number:<br>
      <select name="fno" id="fno" required>
	<option value="0" >0</option>	
	<option value="1">1</option>  
    <option value="2" >2</option>
	<option value="3" >3</option>
	</select>
    Type of room:<select name="room" required>
  <option value="Single" >Single</option>
  <option value="Shared">Shared</option>
</select>
AC Feature:
  <select name="ac" required>
  <option value="AC">With AC</option>
  <option value="Without AC">Without AC</option>
  </select>
  <br>
	Food:
<select name="food" required>
  <option value="With Food(Veg)" >With Food(Veg)</option>
  <option value="With Food(Non-Veg)">With Food(Non-Veg)</option>
  <option value="Without Food">Without Food</option>
</select><br> <br/>
	
    <input type="submit" value="Apply">
    </form>
</div>
</section>
</body>
</html>
</form>

</body>
</html>