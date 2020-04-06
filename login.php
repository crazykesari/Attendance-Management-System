<?php
include('content.php');
?>
<html>
<title>Login Page</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/lo.css">
<style>
#error
{
	color:red;
}
.login
{
	margin-top:100px;
}
</style>
<link rel="stylesheet"type="text/css"href="stylesheet/twobar.css">
</head>
<body>
<div class="outer"id="outer"style="background:#fff;height:800px"></br>

<div id="navigation"> </br>
     <h1><b>Online Attendance Management System</b></h1>
      
         </div></br>
      <div id="tool"	></br>
	  <div id="box"style="margin-left:1000px">
       <ul>
	   <li><a class="home" href="index.php">Back</a></li>   
	   </ul>
	   </div>
         </div></br></br>
	
    <div class="login">
     <div class="login-content"></br>
	 <div id="picture">
	 <image src="images/userlogo1.png"height="100%"width="100%">
	 </div>
	  <p id="signin">Sign In</p>
	  <form action="" method="post">
	  <div id="us">
	  
<input id="user"type="text"name="uname"placeholder="UserId"></input>
<image id="userimage"src="images/user.jpg"height="35px"width="25px">

       </div>
	  <div id="pass">
	  
<input id="pas"type="password"name="password"placeholder="Password"></input>
<image id="passimage"src="images/lock.png"height="35px"width="30px">

       </div>
	   <div id="error"><?php echo $error;?></div>
	 <input type="submit" name="login" value="Login"></input>  
	 </form>
	 <!--<a class="forgot"href="#"style="margin-top:20px">Forgot Password?</a>-->
      </div>
    </div>

</div>
</body>
</html>