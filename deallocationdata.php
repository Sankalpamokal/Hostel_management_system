<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon"; 
$roomno = $_POST["roomno"];							 	 		
$allocated = "No";				 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "UPDATE ADDROOM SET allocated='No', sname=' ' WHERE roomno='$roomno'";
$sql2 = "DELETE FROM ALLOCATE WHERE aroomno='$roomno'";
	$sql3 = "UPDATE STUDENTREG SET status='Not Applied' WHERE USERNAME='$username'";
if (($conn->query($sql1) === TRUE) and ($conn->query($sql2) === TRUE) and ($conn->query($sql3) === TRUE)) {
    echo "Room deallocated successfully";
	header("location: deallocation.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>