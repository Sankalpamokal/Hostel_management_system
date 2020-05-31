<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$fname = $_POST["fname"];							 	 	
$username = $_POST["username"];	
$mobile = $_POST["mobile"];		
$gender = $_POST["gender"];		
$econtact = $_POST["econtact"];	
$gname = $_POST["gname"];	
$grelation = $_POST["grelation"];	
$gcontact = $_POST["gcontact"];	
$address = $_POST["address"];	
$city = $_POST["city"];	
$state = $_POST["state"];	
$pincode = $_POST["pincode"];	
$college = $_POST["college"];					 	 	
$collegenumber = $_POST["collegenumber"];
$collegeid = $_POST["collegeid"];					 	 							 	 		 	 							 	 	
$hbuilding = $_POST["hbuilding"];					 	 							 	 		 	 							 	 	
$fno = $_POST["fno"];					 	 							 	 		 	 							 	 	
$room = $_POST["room"];					 	 							 	 		 	 							 	 	
$ac = $_POST["ac"];					 	 							 	 		 	 							 	 	
$food = $_POST["food"];	
$status = "Applied";					 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO application(fname, username, mobile, gender,econtact,gname,grelation,gcontact,address,city,state,pincode, college, collegenumber, collegeid, hbuilding, fno, room, ac, food)
VALUES('$fname', '$username','$mobile','$gender', '$econtact','$gname', '$grelation', '$gcontact', '$address','$city','$state','$pincode', '$college','$collegenumber', '$collegeid','$hbuilding', '$fno', '$room','$ac','$food')";
$sql1 = "INSERT INTO applicationsave(fname, username, mobile, gender,econtact,gname,grelation,gcontact,address,city,state,pincode, college, collegenumber, collegeid, hbuilding,fno, room, ac, food)
VALUES('$fname', '$username','$mobile','$gender', '$econtact','$gname', '$grelation', '$gcontact', '$address','$city','$state','$pincode', '$college','$collegenumber', '$collegeid','$hbuilding','$fno','$room','$ac','$food')";
$sql2 = "UPDATE studentreg SET status='$status' WHERE username='$username'";
if (($conn->query($sql) === TRUE) and ($conn->query($sql1) === TRUE) and ($conn->query($sql2) === TRUE)) {
echo "<script type='text/javascript'>alert('Application for hostel submitted successfully.');
window.location='apply.php';
</script>";
}else {
echo "<script type='text/javascript'>alert('You have already applied');
window.location='apply.php';
</script>";
}
$conn->close();
?>