<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";							 	 	
$username = "pj134@gmail.com";	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$sql3 = "UPDATE STUDENTREG SET status='Allocated' WHERE USERNAME='$username'";
if (($conn->query($sql3) === TRUE))
{
    echo "<script type='text/javascript'>alert('Room allocated successfully.');
window.location='allocation.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>