<!-- contact page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sugession</title>
<style>
body#indexbody{
    margin: 0px;
    padding: 0px;
    background-color:black;
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

<!-- contact page -->



        * {box-sizing: border-box;}

        input[type=text], input[type=email],input[type=number], textarea {
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
 <?php
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
 $fname = $_SESSION['fname'];
 $mobile = $_SESSION['mobile'];
 $college = $_SESSION['college'];
 $collegenumber = $_SESSION['collegenumber'];
 $gender = $_SESSION['gender'];
 $dob = $_SESSION['dob'];
 $bgroup = $_SESSION['bgroup'];
 $password = $_SESSION['password'];
 ?>
 
  <?php
 if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access the profile page
 {
 //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 header("location:login.php");
 }
 ?>

<body id="indexbody">
<header id="indexheader">
    <div id="logodiv">
    <h1 id="title" >Hostel Management System
        <a href="index.html"><img src = "img/RAIT_DarkBg.png" height="17%" width="17%" id="raitlogo" ></a>
    </h1>
        <hr style="border:1px solid white;"/>
    </div>
    <ul id="ulindex">
        <li class="liindex"><a href="Student.php">Home</a></li>
        <li class="liindex"><a href="edit.php">Edit Profile</a></li>
        <li class="liindex"><a href="rules1.php">Rules</a></li>
        <li class="liindex"><a href="Status.php">Status</a></li>
        <li class="liindex"><a href="apply.php">Apply</a></li>
        <li class="liindex"><a href="Sugession.php" class="active">Sugession</a></li>
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<section style="font-family:Comic Sans MS;">
<h2 style="font-size: 2vw; margin-top: 15px;margin-bottom: 20px;color: white;">Get in touch with us</h2>

<div class="container">
    <form action="sugessiondata.php" method="post">
        <label for="sugession">Sugession</label>
        <textarea id="subject" name="csugession" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
</section>
</body>
</html>
