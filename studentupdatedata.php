<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$fname = $_POST["fname"];							 	 	
$mobile = $_POST["mobile"];
$username = $_POST["username"];					 	 	
$college = $_POST["college"];					 	 	
$collegenumber = $_POST["collegenumber"];
$dob = $_POST["dob"];						 	 						 	 	
$bgroup	= $_POST["bgroup"];						 	 							 	 	
$password =	$_POST["password"];					 	 	
$cpassword =	$_POST["cpassword"];					 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($password==$cpassword)
{
$sql = "UPDATE studentreg SET fname='$fname', mobile='$mobile', college='$college', collegenumber='$collegenumber', dob='$dob', bgroup='$bgroup',password='$password' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Data updated successfully');
window.location='login.php';
</script>";;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
echo "<script type='text/javascript'>alert('Password does not match');
window.location='signup.php';
</script>";
}
$conn->close();
?>