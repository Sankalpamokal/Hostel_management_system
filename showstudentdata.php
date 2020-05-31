<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";

		$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);


session_start(); //always start a session in the beginning 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
if (empty($_POST['appid'])) //Validating inputs using PHP code 
{ 
echo 
"Incorrect student id"; //
header("location: application.php");//You will be sent to Login.php for re-login 
} 
$inAppid = $_POST["appid"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
$stmt= $conn->prepare("SELECT FNAME, USERNAME, MOBILE, GENDER, ECONTACT,GNAME, GRELATION, GCONTACT,ADDRESS,CITY,STATE,PINCODE,COLLEGE, COLLEGENUMBER,COLLEGEID ,HBUILDING,FNO,ROOM,AC,FOOD FROM APPLICATION WHERE APPID = ?"); //Fetching all the records with input credentials
$stmt->bind_param("i", $inAppid); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->execute();
$stmt->bind_result($FnameDB, $UsernameDB, $MobileDB, $GenderDB, $EcontactDB, $GnameDB, $GrelationDB, $GcontactDB, $AddressDB, $CityDB, $StateDB, $PincodeDB, $CollegeDB, $CollegenumberDB, $CollegeidDB, $HbuildingDB, $FnoDB, $RoomDB, $AcDB, $FoodDB); // Binding i.e. mapping database results to new variables
//Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
if ($stmt->fetch() && ($inPassword==$PasswordDB)) 
{
$_SESSION['appid']=$inAppid; //Storing the username value in session variable so that it can be retrieved on other pages
$_SESSION['fname']=$FnameDB;
$_SESSION['username']=$UsernameDB;
$_SESSION['mobile']=$MobileDB;
$_SESSION['gender']=$GenderDB;
$_SESSION['econtact']=$EcontactDB;
$_SESSION['gname']=$GnameDB;
$_SESSION['grelation']=$GrelationDB;
$_SESSION['gcontact']=$GcontactDB;
$_SESSION['address']=$AddressDB;
$_SESSION['city']=$CityDB;
$_SESSION['state']=$StateDB;
$_SESSION['pincode']=$PincodeDB;
$_SESSION['college']=$CollegeDB;
$_SESSION['collegenumber']=$CollegenumberDB;
$_SESSION['collegeid']=$CollegeDB;
$_SESSION['hbuilding']=$HbuildingDB;
$_SESSION['fno']=$FnoDB;
$_SESSION['room']=$RoomDB;
$_SESSION['ac']=$AcDB;
$_SESSION['food']=$FoodDB;

header("location: showstudent.php"); // user will be taken to profile page
}
else
{
echo "Incorrect student id"; 
?>
<a href="login.php">Login</a>
<?php 
} 
} 
?>
