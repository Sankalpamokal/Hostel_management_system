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
echo 
"Incorrect username or password"; //
header("location: login.html");//You will be sent to Login.php for re-login 
} 
$inUsername = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
$inPassword = $_POST["password"]; 
$stmt= $conn->prepare("SELECT USERNAME, PASSWORD, MOBILE, FNAME, COLLEGE, COLLEGENUMBER, COLLEGEID, GENDER, BGROUP, DOB FROM STUDENTREG WHERE USERNAME = ?"); //Fetching all the records with input credentials
$stmt->bind_param("s", $inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->execute();
$stmt->bind_result($UsernameDB, $PasswordDB, $MobileDB, $FnameDB, $CollegeDB, $CollegenumberDB, $CollegeidDB, $GenderDB, $BgroupDB, $DobDB); // Binding i.e. mapping database results to new variables
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
header("location: edit.php"); // user will be taken to profile page
}
else
{
echo "<h2 class=container>Incorrect username or password</h2>"; 
?>
<a href="login.html">Login</a>
<?php 
} 
} 
?>
<html>
<body>
<head>
</head>
<style>
.container {
margin:auto;
            width: 80%;
            border-radius: 10px;
            background-color: black;
			color:white;
            padding: 40px;
            margin-bottom: 100px;
        }

</style>
</body>
</html>