
<?php
 
      
      session_start();
	  $error='';
	  
         if(isset($_POST["login"]))
		 {
           if(empty($_POST['uname'])&&empty($_POST['password']))
	       
       	   {
                 $error="username or Password is invalid";
			 }
            else
			{
			     // Defining Variable
               $username=$_POST['uname'];
               $password = $_POST['password'];

                // Establish Connection
              $connection=mysql_connect("localhost","root","");
                 
			   //To	protect Mysql injection for Security purpose
                  $username = stripslashes($username);
                  $password = stripslashes($password);
                  $username = mysql_real_escape_string($username);
                  $password = mysql_real_escape_string($password);
                  //selecting Database
                  $db=mysql_select_db("attendance",$connection);
				  //sql query
				  $query = mysql_query("select Name,type from faculty where password='$password' AND id='$username'");
                      	 
				 $rows = mysql_num_rows($query);
				 $rt=mysql_fetch_assoc($query);
				  if($rows==1)
				  {
					  if($rt['type']=='admin')
					  {
					  $_SESSION['login_user']=$username;
					  $_SESSION['login_name']=$name;
					  $_SESSION['type']=$type;
				         
					  header("location:Admin/homepage.php");
					  }
					 elseif($rt['type']=='faculty')
					  {
					  $_SESSION['login_user']=$username;
					  $_SESSION['login_name']=$name;
					  $_SESSION['type']=$type;
				         
					  header("location:faculty/homepage.php");
				  
				  }
				  }
					  if($rows==0)
					  {
						  $std = mysql_query("select Name from studentdetails where password='$password' AND Stdid='$username'");
						  $rst=mysql_num_rows($std);
						  
						  if($rst==1)
						  {
							   $_SESSION['login_stdid']=$username;
							
							header("location:student/homepage.php");
						  }
						  else
						  {
							  header("location:login.php");
						  }
						  
					  }
				  
				  else
				  {
					  $error="username or password is invalid";
					  
				  }
	                 mysql_close($connection);
			}
		 }
	
?>