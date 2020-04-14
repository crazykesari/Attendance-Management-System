<?php
include('session.php');
?>
<html>
<title>Faculty Page</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/homepage.css">
</head>
<body bgcolor="powderblue">
<div id="outer"></br>
   <div id="navigation"> </br>
     <h1><b>Online Attendance Management System</b></h1>
      
         </div></br>
      <div id="tool"></br>
	  <div id="box">
       <ul>
	   <li><a class="home" href="index.php">Home</a></li>
	   <li><a class="attendance"href="attendancedoor.php">Attendance</a></li>
	   <li><a class="notes"href="#">Notes</a></li>
	   <li><a class="logout"href="logout.php">Logout</a></li>
	   
	   </ul>
	   </div>
         </div></br></br>
		 
		 <div id="content">
		 
         <h1>You are Welcome: <i><b><?php echo $login_name;?></i></b></h1>
		
             </div>








</div>
</body>
</html>