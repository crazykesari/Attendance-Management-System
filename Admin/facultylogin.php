 <?php 
 include('session.php');
 ?>

		<?php

           session_start();
	     $error='';
	   if(isset($_POST["register"]))
	     {
		  $name=$_POST["fname"];
		  $mob=$_POST["mob"];
	      $fid=$_POST["fid"];
		  $email=$_POST["email"];
		  
	     if(empty($_POST['sub']))
		 {
			 echo "<script>";
			 echo "alert('Subject is required')";
			 echo "</script>";
			 header("location:facultyregister.php");
		 }
		 else
		 {
		 $values = implode(" ",$_POST['sub']);  
		$conn= mysql_connect("localhost","root","");
		$name= stripslashes($name);
		$email= stripslashes($email);
		$fid = stripslashes($fid);
		$mob = stripslashes($mob);
		$name= mysql_real_escape_string($name);
		$email = mysql_real_escape_string($email);
		$mob= mysql_real_escape_string($mob);
		$fid = mysql_real_escape_string($fid);
       $db= mysql_select_db("attendance",$conn);
    $s = "insert into faculty(Name,id,password,mobile,email,branch,subject) values('$_POST[fname]','$_POST[fid]',
	   '$_POST[pass]',$_POST[mob],'$_POST[email]','$_POST[branch]','".$values."')";

	   $ss=mysql_query($s);
		 if($ss==1)
		 {
			 $_SESSION['fname']=$name;
             
	
			
		 //echo "<p>Successfully Faculty Registered</p>".$name;
		 }
		   else
	       {	
                          
		    header("location:facultyregister.php");
		   }
    	}
	  }
?>  
        <html>
		<head>
		<style>
		body{
			width:100%;
		}
		#outer{
			width:100%;
	height:800px;
		background:blue;
	filter:drop-shadow(16px 16px 20px blue);
	margin-top:-50px;
		}
		#content{
            width:50%;			
			margin:0px auto;
            height:500px;
            background:#fff;
			margin-top:50px;
		 	}
		#content p{
			font-size:35px;
			margin:0px auto;
			color:#333;
			font-family:italic;

			margin-left:20px;

		}
		a
		{
			text-decoration:none;
			color:green;
		    font-size:25px;
		    padding:80px 80px;
		}
		@media screen and (max-width:600px)
       {
		   #content{
			   width:50%;
		   }
	   }

		</style>
		</head>
		
		<body>
		<div id="outer"></br>
		   <div id="content"></br>
		   <p><i>Successfully <?php echo $name; ?> Register as a Faculty...</p></i>
		            </br>
             <p><i>FacultyId:</i><?php echo $fid;?></p>
			 <p><i>Password:</i><?php echo $_POST["pass"];?></p></br></br></br>
			 <div id="click">
 		
		    <a id="new"href="facultyregister.php"style="margin-left:30px">Add Faculty</a>  		
						
					</div>
					</div>
					
		    </div>
		</body>
		</html>