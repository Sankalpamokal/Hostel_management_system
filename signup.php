<!-- signup page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Student Sign Up</title>

<script type="text/javascript">
    
</script>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:black;
	    font-family:Comic Sans MS;

}

#raitlogo {
    float: left;
    margin-right: 50px;
	margin-top:0px;
}
#title{
    color:white;
    font-size: 5vw;
    margin-bottom: 0px;
    float:right;
	margin-top:15px;
}
header#indexheader{
    background-color: grey;
}

div#logodiv{
    background-color: black;
    margin-bottom: 0px;
}

ul#ulindex {
    list-style-type: none;
    padding: 8px;
    margin: 0px;
    overflow: hidden;
    text-align: center;
    font-size: 1.8vw;
    font-family:Comic Sans MS;

}

li.liindex {
    display:inline-block;
	
}

li.liindex a {

    color: black;
    text-align: center;
	margin-left:30px;
    padding: 10px 10px;
    text-decoration: none;
}

li.liindex a:hover {
    background-color: white;
    transition: 0.4s;
}
.active{
    background-color: white;
}
hr{
margin:0px;
}

p{
color:black;
font-size:1.vw;
}


<!-- signup page -->



        * {box-sizing: border-box;}

        input[type=text],input[type=date],input[type=password], input[type=email],input[type=number],select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 10px;
            background-color: #f2f4f9;
            padding: 40px;
            margin-bottom: 100px;
        }
        section{
            margin-left: 25%;
            margin-right: 25%;
        }
</style>
</head>
<body>

<body id="indexbody">
<header id="indexheader">
    <div id="logodiv">
    <h1 id="title" >Hostel Management System
        <a href="index.html"><img src = "img/RAIT_DarkBg.png" height="17%" width="17%" id="raitlogo" ></a>
    </h1>
        <hr style="border:1px solid white;"/>
    </div>
    <ul id="ulindex">
        <li class="liindex"><a href="index.html">Home</a></li>
        <li class="liindex"><a href="login.php" class="active">Login</a></li>
        <li class="liindex"><a href="rules.html">Information</a></li>
        <li class="liindex"><a href="contact.php">Contact</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>

<section>
<h2 style="color:white;font-size:2.5vw;text-align:center;">Registration Form</h2>
<div class="container">
<form name="applyform" action="signupdata.php" method="post" enctype="multipart/form-data">
  <p>Name: <input type="text" placeholder="write your full name.." name="fname" required></p>
  <p> Phone Number: <input type="text" placeholder="enter your phone number..." name="mobile" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" placeholder="Mobile number" required></p>
  <p>Email: <input type="email" placeholder="enter your email.." name="username" required></p>
<p>College Name:
<select name="college">
  <option value="RAIT" >RAIT</option>
  <option value="LAW">LAW</option>
  <option value="DENTAL">DENTAL</option>
  <option value="POLYTECHNIC">POLYTECHNIC</option>
</select><br></p>
  <p>College RollNumber: <input type="text" placeholder="enter your college rollnumber.." name="collegenumber" required></p>
<p>College Id:  <input type="file" name="collegeid" id="collegeid" required></p><br>
<p>Gender:
<select name="gender">
  <option value="Male" required>Male</option>
  <option value="Female">Female</option>
</select><br></p>
<p>Date of Birth:<input type="date" name="dob" max="2005-12-31" required></p>
<p>Blood Group:
<select name="bgroup" required>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
   <option value="B-">B-</option>
  <option value="O">O</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select></p>
<label>Password </label>
<input type="password" name="password" id="password" required>
<label>Confirm Password </label>

<input type="password" name="cpassword" id="cpassword" required>

  <input type="submit" value="Submit">
</form>

</div>
</section>
</body>
</html>