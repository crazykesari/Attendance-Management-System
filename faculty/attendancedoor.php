<?php
include('session.php');
$error="lecture is already taken";
?>
<html>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/twobar.css">
<style>
#data
{
	width:500px;
	height:500px;
	background:white;
	margin:0px auto;
	margin-top:50px;
	filter:border-shadow(16px 16px 20px blue);
}
input[type="text"],select
{
  width:70%;
	border:none;
	height:35px;
	font-size:17px;
    margin-left:0px;
	display:inline-block;
	background:#ffeefe;
	padding:0 15;
	color:black;
	border-radius:3px;

	margin-left:50px;
	
}
#data p
{
			opacity:0.5;
			font-size:25px;
			margin-left:50px;
			
}
.control 
{
	margin-top:50px;
}
input[type="submit"]
 {
    border:none;
	outline:none;
	height:40px;
	background:#1c8adb;
	color:#fff;
	border-radius:20px;
	text-align:center;
	margin-left:15%;
	width:25%;
	float:left;
	
	}
	input[type="reset"]
 {
    border:none;
	outline:none;
	height:40px;
	background:#1c8adb;
	color:#fff;
	border-radius:20px;
	text-align:center;
	margin-left:2%;
	width:25%;
	float:left;
	
	}
 input[type="submit"]:hover,input[type="reset"]:hover{
 
 cursor:pointer;
 background:#39dc79;
 color:#000;
 }

.error
{
	color:red;
	margin-left:50px;
	font-size:20px;
}
</style>
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.css">
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.structure.css">
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.theme.css">

</head>
<body>
<div id="outer">
   <div id="navigation"> </br>
     <h1><b>Online Attendance Management System</b></h1>
      
         </div></br>
      <div id="tool"></br>
	  <div id="box">
       <ul>
	 <li><a class="back"href="homepage.php">Back</a></li>
	   <li><a class="logout"href="logout.php">Logout</a></li>
	  </ul>
	  </div>
	  </div>
	  
	  <div id="data"> </br>
       <form action=""name="attendance"onsubmit="return Validate()"method="post">
        <p id="date">Date:</p>
		<input id="dob"type="text"name="picker"placeholder="select"></br>
	    <div id="error_date"class="error"></div>
	           
		<p id="lecture">Lecture:</p>
		 <select name="lecture"id="lect">
		<option>select</option>
		<option>lecture[1]</option>
		<option>lecture[2]</option>
		<option>lecture[3]</option>
		<option>lecture[4] </option>
		   </select>
	  <div id="error_lecture"class="error"></div>

<?php	  
      mysql_connect("localhost","root","");
	  mysql_select_db("attendance");
       $s = "select subject from faculty where id='$login_session'"; 
	   $resource=mysql_query($s);
	   $row = mysql_fetch_assoc($resource);


// zero limit
$value=explode(' ',$row['subject']);
$arrlength = count($value);

		 echo "<p id='subject'>Section</p>";
		   echo "<select name='section'id='sub'>";
		   echo "<option>select</option>";
              echo "<option>cs3a</option>";
		 echo "</select>";
			  
		  ?>
		  
	      <div id="error_subject"class="error"></div>     
		  <div class="control">
		  <input type="submit"name="attenddoor" value="Submit"></input>
		  <input type="reset"name="rest" value="reset"></input>
           </div>		  
		  </form>
		  </div>

       </div>

<script src="javascript/attenddoor.js"></script>
<script src="jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>

</div>

</body>
</html>
<script>
$(document).ready(function()
{

$("#dob").datepicker({changeMonth:true,changeYear:true,showOtherMonths:true,minDate:new Date(2017,12,01),dateFormat:"yy-mm-dd"});
});

</script>	   
<?php


      $error="";
	  $check=0;
	  if(isset($_POST['attenddoor']))
	 {

       mysql_connect("localhost","root","");
       mysql_select_db("attendance");
       $res = mysql_query("select * from daily");
		 $count=mysql_num_rows($res);
		 for($i=1;$i<=$count;$i++)
		 {
			 
		   $arr= mysql_fetch_assoc($res);
           if($_POST['picker']==$arr['date'])
		   {
			   if($_POST['lecture']==$arr['lecture'])
			   {
				   $error="lecture is taken";
				   $check=1;  
				  
                       
			   }
	      }
		 }

		 
		 if($check==0)
		 {
			 $s = "insert into daily(date,lecture,section,facultyid) values('$_POST[picker]','$_POST[lecture]','$_POST[section]','$login_session')";
	         $result=mysql_query($s);
	 
	        if($result==1)
	        {

			  header('location:takeattendance.php');
			}
	         else
	        {   
		        echo "<script type='text/javascript'>alert('Invalid!!')</script>";
   	        }
	  }
      else
	  {
          echo "<script type='text/javascript'>window.alert('lecture is already taken')</script>";
	  }		  
	 }
	 
?>
