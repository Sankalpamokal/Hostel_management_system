<!-- login page -->
<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";

		$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);


session_start(); //always start a session in the beginning 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
if (empty($_POST['username']) || empty($_POST['password'])) //Validating inputs using PHP code 
{  
echo "<script type='text/javascript'>alert('Username or password can't be empty');
window.location='login.php';
</script>";//You will be sent to Login.php for re-login 
} 
$inUsername = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
$inPassword = $_POST["password"]; 
$stmt= $conn->prepare("SELECT USERNAME, PASSWORD, MOBILE, FNAME, COLLEGE, COLLEGENUMBER, COLLEGEID, GENDER, BGROUP, DOB, STATUS FROM STUDENTREG WHERE USERNAME = ?"); //Fetching all the records with input credentials
$stmt->bind_param("s", $inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->execute();
$stmt->bind_result($UsernameDB, $PasswordDB, $MobileDB, $FnameDB, $CollegeDB, $CollegenumberDB, $CollegeidDB, $GenderDB, $BgroupDB, $DobDB, $StatusDB); // Binding i.e. mapping database results to new variables
//Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
if ($stmt->fetch() && ($inPassword==$PasswordDB)) 
{
$_SESSION['username']=$inUsername; //Storing the username value in session variable so that it can be retrieved on other pages
$_SESSION['password']=$PasswordDB;
$_SESSION['mobile']=$MobileDB;
$_SESSION['fname']=$FnameDB;
$_SESSION['college']=$CollegeDB;
$_SESSION['collegenumber']=$CollegenumberDB;
$_SESSION['collegeid']=$CollegeidDB;
$_SESSION['gender']=$GenderDB;
$_SESSION['bgroup']=$BgroupDB;
$_SESSION['dob']=$DobDB;
$_SESSION['status']=$StatusDB;
header("location: edit.php"); // user will be taken to profile page
}
else
{
	$msg="Invalid username or password";
	echo"<script type='text/javascript'>alert('$msg');</script>";
} 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Login</title>
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

<!-- login page -->


		* {
			margin: 0px;
			box-sizing: border-box;
		}
		
		a.alink {
			font-family: Poppins-Regular,sans-serif;
			font-size: 14px;
			line-height: 1.7;
			color: #666666;
			margin: 0px;
			text-decoration: none;
					}


		a:hover {
			text-decoration: none;
			color: black;
		}

		input {
			outline: none;
			border: none;
		}


		button {
			outline: none;
			border: none;
			background: transparent;
		}

		button:hover {
			cursor: pointer;
		}

		.txt1 {
			font-family: Poppins-Regular,sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #666666;
		}

		.txt2 {
			font-family: Poppins-Regular,sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333333;
			text-transform: uppercase;
		}

		.bg1 {background-color: #3b5998;text-decoration: none;}
		.bg2 {background-color: #1da1f2;text-decoration: none;}
		.bg3 {background-color: #ea4335;text-decoration: none;}


		.container-login {
			margin-top: 20px;
			min-height: 70vh;
			width: 40%;
		}
		.wrap-login100 {
			background: #fff;
			border-radius: 10px;
			overflow: visible;
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 30px;
			padding-bottom: 20px;

		}


		.logintitle {
			display: block;
			font-family: Poppins-Bold,sans-serif;
			font-size: 39px;
			color: #333333;
			line-height: 1.2;
			text-align: center;
		}
		.inputbox {
			width: 100%;
			position: relative;
			border-bottom: 2px solid #d9d9d9;
		}

		.inputlabel {
			font-family: Poppins-Regular,sans-serif;
			font-size: 16px;
			color: #333333;
			line-height: 1.5;
			padding-left: 7px;
		}

		.inputarea {
			font-family: Poppins-Regular,sans-serif;
			font-size: 16px;
			color: #333333;
			line-height: 1.2;

			display: block;
			width: 100%;
			height: 55px;
			background: transparent;
			padding: 0 7px 0 43px;
		}
		.containerform {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		.loginbtn:hover{
					background-color:black;

		}
		.loginbtn {
			background-color:gray;
			width: 30%;
			display: block;
			position: relative;
			z-index: 1;
			border-radius: 15px;
			overflow: hidden;
			margin: 0 auto;
		}

		.loginbgbtn {
			position: absolute;
			z-index: -1;
			width: 300%;
			height: 100%;
			background: #a64bf4;
			top: 0;
			left: -100%;
			transition: all 0.4s;
		}

		.loginbtntxt {
			font-family: Poppins-Medium,sans-serif;
			font-size: 16px;
			color: #fff;
			line-height: 1.2;
			text-transform: uppercase;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 0 20px;
			width: 100%;
			height: 50px;
		}







		.txt1 ,txt2{text-align: center;}
		.text-right {text-align: right;}




		.flex-c-m {
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.flex-col-c {
			display: flex;
			flex-direction: column;
			align-items: center;
		}


		.icon {
			color: black;
			min-width: 50px;
			position: absolute;
			margin-top: 20px;
			margin-left: 18px;
		}
.incon{
			width: 100%;
			margin-bottom: 0px;
	 }

.limiter{
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
}
</style>
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
        <li class="liindex"><a href="index.html">Home</a></li>
        <li class="liindex"><a href="login.php" class="active">Login</a></li>
        <li class="liindex"><a href="rules.html">Information</a></li>
        <li class="liindex"><a href="contact.php">Contact</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<div class="limiter" style="margin-top: 30px;">
	<div class="container-login">
		<div class="wrap-login100">
		
		
		
<form class="login100-form" action=" " method="post" style="font-family: Poppins-Regular,sans-serif;">
					<span class="logintitle">
						Login Here
					</span>
<br/>
<div id="radio" style="padding-bottom: 20px">
        <input type="radio" name="source" value="student" id="student" onclick="javascript:window.location.href='login.php'; return false;" checked >Student   
          <input type="radio" name="source" value="admin" id="admin" onclick="javascript:window.location.href='alogin.php'; return false;" >Admin
          <input type="radio" name="source" value="watchman" id="watchman" onclick="javascript:window.location.href='glogin.php'; return false;" >Watchman
      
	  </div>
				<div class="inputbox">
					<span class="inputlabel">Username</span>
					<div class="incon">
					<i class="fa fa-user icon"></i>
					<input class="inputarea" type="text" name="username" placeholder="Type your username">
					</div></div>
<br/>
				<div class="inputbox">
					<span class="inputlabel">Password</span>
					<div class="incon">
					<i class="fa fa-key icon"></i>
					<input class="inputarea" type="password" name="password" placeholder="Type your password">
					</div></div>

			<!--	<div class="text-right">
					<a href="forgot.html" class="alink">
						Forgot password?
					</a>
				</div>
--><br/>
				<div class="containerform">
					<div class="loginbtn">
						<button class="loginbtntxt">
							Login
						</button>
					</div>
				</div>


<br/>
				<div class="flex-col-c">
						<span class="txt1">
							Or Sign Up Using
						</span>
					<a href="signup.php" class="txt2 alink">
						Sign Up
					</a>
				</div>
			</form>
			</div>
			</div>
			</div>
			
</body>
</html>