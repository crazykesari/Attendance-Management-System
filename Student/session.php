<?php
    $type='';
   session_start();
   $connection=mysql_connect("localhost","root","");
   $db = mysql_select_db("attendance",$connection);   
   //storing session


	 $type=$_SESSION['login_stdid'];
	 
//sql query
    
	$sql = mysql_query("select Stdid,Name from studentdetails where Stdid='$type'",$connection);
  $row = mysql_fetch_assoc($sql);
  $login_session =$row['Stdid'];
  $login_name=$row['Name'];
  if(!isset($login_session))
  {
	  mysql_close($connection);
	  header('location:login.php');
  }
   	
  
  
  else
  {
  }
