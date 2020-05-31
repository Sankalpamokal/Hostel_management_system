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
$stmt= $conn->prepare("SELECT FNAME, MOBILE, COLLEGE, COLLEGENUMBER, GENDER, DOB, BGROUP, PASSWORD FROM ADMIN WHERE USERNAME = ?"); //Fetching all the records with input credentials
$stmt->bind_param("s", $inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->execute();
$stmt->bind_result($FnameDB, $MobileDB, $UsernameDB, $CollegeDB, $CollegenumberDB, $GenderDB, $DobDB, $bgroupDB, $PasswordDB); // Binding i.e. mapping database results to new variables
//Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
if ($stmt->fetch() && ($inPassword==$PasswordDB)) 
{
$_SESSION['username']=$UsernameDB; //Storing the username value in session variable so that it can be retrieved on other pages
$_SESSION['fname']=$FnameDB;
$_SESSION['mobile']=$MobileDB;
$_SESSION['college']=$CollegeDB;
$_SESSION['collegenumber']=$CollegenumberDB;
$_SESSION['gender']=$GenderDB;
$_SESSION['dob']=$DobDB;
$_SESSION['bgroup']=$bgroupDB;
$_SESSION['password']=$PasswordDB;
$_SESSION['status']=$StatusDB;
header("location: edit.php"); // user will be taken to profile page
}
else
{
echo "Incorrect username or password"; 
?>
<a href="login.html">Login</a>
<?php 
} 
} 
?>
