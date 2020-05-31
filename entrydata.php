<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon"; 
$allocatedid = $_POST["allocatedid"];							 	 		
$status = "Entry";				 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO location(allocatedid,status) VALUES('$allocatedid','$status')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Entry recorded successfully');
window.location='wentry.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>