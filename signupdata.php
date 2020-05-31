<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";
$fname = $_POST["fname"];							 	 	
$mobile = $_POST["mobile"];
$username = $_POST["username"];					 	 	
$college = $_POST["college"];					 	 	
$collegenumber = $_POST["collegenumber"];
$collegeid = addslashes(file_get_contents($_FILES["collegeid"]["tmp_name"]));  
$gender	= $_POST["gender"];	
$dob = $_POST["dob"];						 	 						 	 	
$bgroup	= $_POST["bgroup"];						 	 							 	 	
$password =	$_POST["password"];
$cpassword =	$_POST["cpassword"];
$status = "Not Applied";					 	 	
// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$stmt= $conn->prepare("SELECT UID, COLLEGE, ROLLNO, YOA FROM UNIVERSITYDB WHERE ROLLNO = ?"); //Fetching all the records with input credentials
$stmt->bind_param("s", $collegenumber); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->execute();
$stmt->bind_result($UidDB, $CollegeDB, $RollDB, $YoaDB); // Binding i.e. mapping database results to new variables
if ($password==$cpassword)
{
if ($stmt->fetch() && ($collegenumber==$RollDB)) 
{
$stmt->close();
$sql = "INSERT INTO studentreg(fname, mobile, username, college, collegenumber, collegeid, gender, dob, bgroup, password, status)
VALUES('$fname', '$mobile', '$username', '$college', '$collegenumber','$collegeid','$gender','$dob', '$bgroup','$password','$status')";

if ($conn->query($sql) == TRUE) {
   echo "<script type='text/javascript'>alert('Registration Successful.');
window.location='login.php';
</script>";
} else {
echo "<script type='text/javascript'>alert('Email id already exists');
window.location='signup.php';
</script>"; 
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else
{
echo "<script type='text/javascript'>alert('Student does not exists,Please check your roll number');
window.location='signup.php';
</script>"; 
}
}
else{
echo "<script type='text/javascript'>alert('Password does not match');
window.location='signup.php';
</script>"; 
}
$conn->close();
?>