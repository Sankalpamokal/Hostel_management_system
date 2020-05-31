<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon"; 
$allocatedid = $_POST["allocatedid"];							 	 		
$status1 = "Exit";				 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO location(allocatedid,status) VALUES('$allocatedid','$status1')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Exit entry recorded successfully');
window.location='wentry.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>