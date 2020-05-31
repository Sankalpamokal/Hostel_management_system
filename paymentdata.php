<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$allocatedid = $_POST["allocatedid"];							 	 	
$fpaid = $_POST["fpaid"];		
			 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql4 = "SELECT fpaid,fbalance FROM allocate WHERE allocatedid='$allocatedid'";
if($result = mysqli_query($conn, $sql4)){
	while($row = mysqli_fetch_array($result)){
		$paid=$row['fpaid'];
		$balance=$row['fbalance'];
	}
}
$sql = "UPDATE ALLOCATE SET fpaid='$paid'+'$fpaid', fbalance='$balance'-'$fpaid' WHERE allocatedid='$allocatedid'";
if ($conn->query($sql) === TRUE) {
    echo "Fees paid successfully";
	header("location: payment.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>