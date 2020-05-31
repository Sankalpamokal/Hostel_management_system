<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$fname = $_POST["fname"];							 	 	
$username = $_POST["username"];	
$mobile = $_POST["mobile"];		
$gender = $_POST["gender"];			
$college = $_POST["college"];						 	 							 	 		 	 							 	 	
$collegenumber = $_POST["collegenumber"];
$ahbuilding = $_POST["hbuilding"];
$afloorno = $_POST["afloorno"];					 	 							 	 		 	 							 	 	
$aroomno = $_POST["aroomno"]; 	 		 	 							 	 	
$aroom = $_POST["aroom"];	
$aac = $_POST["aac"];		 	 		 	 							 	 	
$afood = $_POST["afood"];		
$allocated = "Yes";				 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql4 = "SELECT price FROM addroom WHERE roomno='$aroomno'";
if($result = mysqli_query($conn, $sql4)){
	while($row = mysqli_fetch_array($result)){
		if($afood = 'AC')
		$price=$row['price']+1000;
		else if($afood = 'Without_AC')
		$price=$row['price'];
		
		if($afood = 'With_Food(Veg)')
		$price=$row['price']+500;
		else if($afood = 'With_Food(Non-Veg)')
		$price=$row['price']+1000;
		else
		$price=$row['price'];
	}
}

$sql = "INSERT INTO allocate(fname, username, mobile, gender,college,collegenumber,ahbuilding,afloorno,aroomno,aroom,aac,afood,allocatedd,fbalance)
VALUES('$fname', '$username','$mobile','$gender', '$college','$collegenumber', '$ahbuilding', '$afloorno', '$aroomno', '$aroom', '$aac', '$afood', '$allocated', '$price')";
$sql1 = "UPDATE ADDROOM SET allocated='Yes', sname='$fname' WHERE roomno='$aroomno'";
$sql2 = "DELETE FROM APPLICATION WHERE USERNAME='$username'";
$sql3 = "UPDATE STUDENTREG SET status='Allocated' WHERE USERNAME='$username'";

if (($conn->query($sql) === TRUE) and ($conn->query($sql1) === TRUE) and ($conn->query($sql2) === TRUE) and ($conn->query($sql3) === TRUE)) {
    echo "<script type='text/javascript'>alert('Room allocated successfully.');
window.location='allocation.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>