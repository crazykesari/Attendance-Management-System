
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
				  	  $std = mysql_query("select Name from studentdetails where password='$password' AND Stdid='$username'");
						  $rst=mysql_num_rows($std);
						  
						  if($rst==1)
						  {
							  $_SESSION['login_stdid']=$username;
						
						  header("location:homepage.php");
						  }
						  else
						  {
							  header("location:login.php");
						  }
						  
					  
	                 mysql_close($connection);
			}
		 }
	
?>