<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$hbuilding = $_POST["hbuilding"];							
$floorno = $_POST["floorno"];
$roomno = $_POST["roomno"];					 	 	
$room = $_POST["room"];	
$gender = $_POST["gender"];					 	 					 	 	
$ac = $_POST["ac"];
$price = $_POST["price"];					 	 			 
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO addroom(hbuilding, floorno, roomno, room, gender, ac, price,allocated)
VALUES('$hbuilding', '$floorno', '$roomno', '$room', '$gender', '$ac','$price','No')";

if ($conn->query($sql) === TRUE) {
    echo "New room created successfully";
	header("location:rooms.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>