<?php

if(isset($_POST["register"]))
{
      		$password=$_POST["pass"];
 	 $fname=$_POST["fname"];
         		$stdid=$_POST["stdid"];
	 /*$email=$_POST["email"];
		$fathername=$_POST["fathername"];

		$mobile=$_POST["mob"];
		 $mothername=$_POST["mothername"];
		$dob=$_POST["dob"];
		$gender=$_POST["gender"];
		$cat=$_POST["cat"];
		$fatheroccup=$_POST["fatheroccup"];
		$motheroccup=$_POST["motheroccup"];
		$guarmob=$_POST["guar-mob"];
		 $guarname=$_POST["guarname"];
		$add=$_POST["add"];
		$peradd=$_POST["peradd"];
		$pin=$_POST["pin"];
		$city=$_POST["city"];
		$hs=$_POST["hs"];
		$hsper=$_POST["hsper"];
		$state=$_POST["state"];
		$hsyear=$_POST["hsyear"];
		$hsroll=$_POST["hsroll"];
		$in=$_POST["in"];
		$inper=$_POST["inper"];
		$inyear=$_POST["inyear"];
		$inroll=$_POST["inroll"];
		$uniroll=$_POST["uniroll"];

		$branch=$_POST["branch"];
		$course=$_POST["course"];
		$batch=$_POST["batch"];
		$year=$_POST["year"];
		*/
		
		
//$con=mysql_connect("localhost","root","");
//mysql_select_db("attendance",$con);
mysql_connect("localhost","root","");
mysql_select_db("attendance");
$ss="insert into studentdetails values('$_POST[fname]','$_POST[fathername]','$_POST[mothername]','$_POST[dob]','$_POST[gender]','$_POST[email]','$_POST[mob]','$_POST[guarname]','$_POST[guarmob]','$_POST[fatheroccup]','$_POST[motheroccup]',
'$_POST[cat]','$_POST[add]','$_POST[peradd]','$_POST[state]',
'$_POST[city]','$_POST[pin]','$_POST[hs]','$_POST[hsroll]',
'$_POST[hsyear]','$_POST[hsper]','$_POST[schoolname]','$_POST[cllgname]',
'$_POST[inper]','$_POST[uniboard]','$_POST[uniroll]','$_POST[stdid]',
'$_POST[batch]','$_POST[course]','$_POST[branch]','$_POST[year]','$_POST[pass]')";
	   if( mysql_query($ss))
	   {
		   if($_POST['year']==3)
		    {
			$cs="insert into cs3a(rollno) values('$_POST[uniroll]')";
			 $res=mysql_query($cs);
			}
	   }
	    else
		{
     	header("location:stdregister.php");
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
		   <p><i>Successfully <?php echo $fname; ?> Register as a Student...</p></i>
		            </br>
             <p><i>StudentId:</i><?php echo $stdid;?></p>
			 <p><i>Password:</i><?php echo $password;?></p></br></br></br>
			 <div id="click">
 		
		    <a id="new"href="stdregister.php"style="margin-left:30px">Add Student</a>  		
						
					</div>
					</div>
					
		    </div>
		</body>
		</html>