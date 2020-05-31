<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$email = $_POST["email"];
$username = $_POST["username"];	
$password = $_POST["password"];						 	 							 	 	
$cpassword = $_POST["cpassword"];						 	 							 	 	
					 	 							 	 	
					 	 							 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($password == $cpassword)
{
$sql = "UPDATE admin SET username='$username', password='$password' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Data updated successfully');
window.location='alogin.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
echo "<script type='text/javascript'>alert('Password does not match');
window.location='admin.php';
</script>";
}
$conn->close();
?>