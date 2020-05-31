<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$appid = $_POST["appid"];							 	 	
$username = $_POST["username"];	
$status = "Rejected";
			 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM APPLICATION WHERE USERNAME='$username'";
if ($conn->query($sql) === TRUE) {
$sql2 = "UPDATE STUDENTREG SET status='Rejected' WHERE USERNAME='$username'";
echo "<script type='text/javascript'>alert('Application rejected successfully');
window.location='allocation.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>