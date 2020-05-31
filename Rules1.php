<!-- index page homepage -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/gif/png" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Rules</title>
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

.container {
margin:auto;
            width: 80%;
            border-radius: 10px;
            background-color: lightgrey;
            color:black;
            padding: 40px;
            margin-bottom: 100px;
        }
        div.points{
        font-size:1.5vw;
        }
        h2{
        color:red;
        }
        h3{
        color:red;
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
        <li class="liindex"><a href="rules1.php" class="active">Rules</a></li>
        <li class="liindex"><a href="Status.php">Status</a></li>
        <li class="liindex"><a href="vrooms.php">Vacant Rooms</a></li>
        <li class="liindex"><a href="apply.php">Apply</a></li>
    <!--    <li class="liindex"><a href="Sugession.php">Sugession</a></li>  -->
        <li class="liindex"><a href="logout.php">Logout</a></li>
    </ul>

    <hr style="border:1px solid black;"/>
</header><br/><br/>
<div class="container">
<h1 style="font-size:3vw;color:red;"> Hostel Rules and Regulations</h1>
<div class="points">

<ul>

<li> Student should read the rules before signing the application form (A copy of rules
is attached with the application form).</li>
<li> Rules to be displayed in the hostel also.</li>
<li> Duplicate keys will be made on application received from students by the Campus
Administrator/Rector.</li>
<li> Designated person should make the keys.</li>
<li> Complaint form/Register to be provided to students.</li>
<li> Any cleanliness matter to be brought to the notice of the Campus Administrator/
Rector.</li>
<li> Mess to be informed about non-availability of students.</li>
<li> Food to be served in the room on depositing Identity card in case of illness.</li>
<li> Lift to be closed after 10.30 pm.</li>
<li> Inspection to be done by Hostel Committee.</li>
<li> Standard Night out forms to be provided with undertaking.</li>
</ul>
</div>
<h2>Code of Conduct</h2>
<div class="points">
<h3>For Girls:</h3>
<div class="points">
    <ul>
        
        <li> A girl student must enter all the columns in the register regarding participation in curricular activities and extracurricular beyond the working hours of the Institute.</li>
        <li> A girl Student must submit the names and addresses of the local guardians with their signature, if any, duly authorized by the parents (or authorized guardian as per declaration in the admission form) in the prescribed form available with the warden.</li>
        <li> For late night stay at local guardians’ residence up to 9 PM or night halt, prior written permission of the warden must be obtained. In addition, the local guardian must submit a letter stating that the student had stayed with them.</li>
        <li>Prior permission of the warden must be taken by the girl student for leaving to their homes.</li>
        <li>For girls, tight body hugging clothes, short tops etc. are forbidden outside the room</li>
        <li>Visitors may meet the Girl student outside the gate of the girls Hostel up to 7:30 PM. with the permission of the Hostel Warden/Dean of Student Welfare (D.S.W.)</li>
    </ul>  
    </div>  
<h3>For Boys:</h3>
<div class="points">
    <ul>
        <li>Boys should be decently dressed when they are out of rooms</li>   
         <li>No male person (even father) will be allowed inside the Girl’s Hostel.</li>
         <li>Parents/Guardians/Visitors can meet their ward in hostel with the permission of the hostel warden before
            7.00 pm.</li>
        <li> No Parent/Guardian/Visitor is allowed to stay in their room. Lady visitors are not allowed to visit
            students in their living rooms. </li>
        </ul>
    </div>
	    <h3>Common Rules:</h3>

<ul>
       <li> Silence: Strict silence shall be observed in hostel from 12.00 am to 6.00 am. Care should
be taken at all times to ensure that music/loud talking is NOT audible outside the room.
Any manner of festivities and noise making/celebrations will not be entertained, which
may cause disturbance to other inmates in the hostel premises. Recreational facilities to
be turned off at 10.30 pm.</li>
    <li> No gambling of any kind shall be allowed on the premises of the hostel.</li>
    <li> No student shall bring or store any firearm, ammunition, explosive and inflammable
goods on the premises of the hostel.</li>
    <li>Alcohol / Drugs / Smoking: Students shall not bring, take and/or drink any alcohol/
intoxicating drink, drug or substance of any kind what so ever and/or smoke in the
room and/or any part of premises. The same shall apply to visitors also. An occurrence
of such behavior shall invite strict disciplinary action leading to rustication from the
Institute.</li>
    <li> If any common property is damaged or lost, the same shall be charged in equal shares to
the students who are in common use of that property. Students shall not drive any pegs
or nails into walls or stick posters on walls, windows and doors.</li>
    <li>Fixture: Student shall not bring any extra furniture or other fixture in the room. All
furniture and fixture in the rooms allotted to students must be cared for property.
Students will be required to pay double the original cost of any item found missing from
their room. Students will also be required to pay twice the charges of the repair to items
that found to have been willfully damaged or have been damaged on account of misuse
or unfair wear and tear.</li>
</ul>
</div>
<h2> Issues Related to Parents/ Relatives/Visitors</h2>
<div class="points">

<ul>
    <li>Parents/Guardians should give an undertaking to cooperate with the Hostel
authorities and should be available on call as and when required and disclose all
contact details.</li>
    <li> Parents/Visitors are advised not to insist on entry beyond the designated area or
visiting room as it shall disturb other students.</li>
</ul>
</div>
<h2> Use of Appliances</h2>
<div class="points">
<ul>
    <li>The use of electrical appliances such as immersion heaters,
electric stove / heaters / electric iron are forbidden in any of
the rooms allotted for residence. Private cooking in the hostels
/ student’s room is strictly forbidden. Such appliances, if
found will be confiscated and a fine will also be imposed.</li>
    <li> The uses of audio systems which may cause inconvenience to
other occupants are not allowed. The use of personal TV, VCR
and VCD / DVD is prohibited. The students should not hire
objectionable CDs from outside.</li>
    <li>When the students go out of their room they should switch
off all the electrical / electronic appliances, and keep it
locked (at all times). Violation will attract suitable penalty
and punishment as decided by authorities.</li>
</ul>
</div>
<h2> Other Important Rules</h2>
<div class="points">

<ul>
    <li> Ragging in any form is strictly prohibited.</li>
    <li> Hostel authorities are responsible for room allotment and their
decision is final and binding.</li>
    <li> Fine for late arrival and absence for biometric roll call
         a. Rs. 100/- for first time
         b. Rs. 500/- for second time
         c. Suspension for third time</li>
    <li>Any other violation will be dealt with on case by case basis</li>
    <li>2 The students should not screen pirated / unauthorized /
unlicensed movies in their computers and common room. Any
violation will be dealt severely. Punishment for the same will
be decided by the authorities.</li>
</ul> 
</div>
</div>
</body>
</html>