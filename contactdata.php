<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$cname = $_POST["cname"];
$cemail = $_POST["cemail"];					 	 					 	 							 	 	
$cmobile = $_POST["cmobile"];							 	 							 	 	
$csubject = $_POST["csubject"];	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact(cname, cemail, cmobile, csubject)
VALUES('$cname', '$cemail', '$cmobile', '$csubject')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location: contact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>