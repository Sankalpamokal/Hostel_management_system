<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$username = $_POST["username"];							 	 	
						 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM APPLICATION WHERE USERNAME='$username'";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
	header("location: allocation.php");
}else {
echo "<script type='text/javascript'>alert('A applied');
window.location='allocation.php';
</script>";
}
$conn->close();
?>