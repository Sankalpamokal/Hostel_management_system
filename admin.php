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
input[type=text], input[type=email],input[type=password],input[type=file], input[type=number], textarea,select {
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
            margin:auto;
            width: 30%;
            border-radius: 10px;
            background-color: #f2f4f9;
            padding: 40px;
			margin-bottom:100px;
        }
</style>
<script>
	function checkpass(){
	if(document.getElementById('password').value ==  document.getElementById('cpassword').value)
	{
	document.getElementById('submit').disabled=true;
	var msg="Please match the password";
	alert('msg');
	}
	else
	{
		document.getElementById('submit').disabled=false;
	}
	}
	</script>
</head>
<body id="indexbody">
<header id="indexheader">
    <div id="logodiv">
    <h1 id="title" >Hostel Management System
        <a href="index.html"><img src = "img/RAIT_DarkBg.png" height="17%" width="17%" id="raitlogo" ></a>
    </h1>
        <hr style="border:1px solid white;"/>
    </div>
    <ul id="ulindex">
        <li class="liindex"><a href="admin.php" class="active">Profile</a></li>
        <li class="liindex"><a href="application.php">Application</a></li>
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
<h1>Admin profile details</h1>
<div class="container">
                                        <form action="adminupdatedata.php" method="post" onsubmit="return checkpass();">
                                            
                                                <label>Username </label><br/>
                                                    <input type="text" name="username" id="username" value="<?php echo $username ?>"><br/>
                                                <label>Email</label><br/>
    <input type="email" name="email" id="email" value="<?php echo $email ?>"  required="required"><br/><span style="color: red;">Email can't be changed.</span><br/>
                                               

                                      <label>New Password</label><br/>
                                            <input type="password" name="password" id="password" value="<?php echo $password ?>" required="required"><br/>
                                        
                                   <label>Confirm Password</label><br/>
                <input type="password" value="<?php echo $password ?>" required="required" id="cpassword" name="cpassword" ><br/><br/>
                                            
                                                
                     <input type="submit" name="submit" Value="Change Password">
					 </form>
</div>
</body>
</html>