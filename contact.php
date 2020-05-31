<!-- contact page -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Contact</title>
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
        <li class="liindex"><a href="login.php">Login</a></li>
        <li class="liindex"><a href="rules.html">Information</a></li>
        <li class="liindex"><a href="contact.php" class="active">Contact</a></li>
    </ul>
    <hr style="border:1px solid black;"/>
</header>
<section style="font-family:Comic Sans MS;">
<h2 style="font-size: 2vw; margin-top: 15px;margin-bottom: 20px;color: white;">Get in touch with us</h2>

<div class="container">
    <form action="contactdata.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="fname" name="cname" placeholder="Enter Your Name" required="required">

        <label for="email">Email</label>
        <input type="email" id="email" name="cemail" placeholder="Enter Your Email" required="required"><br/>

        <label for="number">Mobile No</label>
        <input type="number" id="number" name="cmobile" placeholder="Enter Your Mobile Number" required="required">
    <br/>

        <label for="subject">Subject</label>
        <textarea id="subject" name="csubject" placeholder="Write something.." style="height:200px"required="required"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
</section>
</body>
</html>