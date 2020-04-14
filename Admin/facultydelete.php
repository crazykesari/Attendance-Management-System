 <?php 
 include('session.php');
 ?>

  
<?php 

   if(isset($_POST['del']))
   {
	   $id = $_POST['id'];
	   $con = mysql_connect("localhost","root","");
	   mysql_select_db("attendance",$con);
	   $f="select * from faculty";
	   $resource = mysql_query($f);
	   $count=mysql_num_rows($resource);
	   $i=0;

	   for($i=0;$i<$count;$i++)
	   {
		   	   $flag=0;
       $ret=mysql_fetch_assoc($resource);
        if($ret['id']==$id)
        {
           $name=$ret['Name'];
		   echo $name;
             break;
		}
      else
	  { 
          $flag=1;
                   	 
	  }
   }
   if($flag==1)
   {


       header("location:faculty.php");
   }
   else
   {
	   echo "<script>";
	   echo "var r=confirm('do u really want to delete')";
	   echo "</script>";
	   
	   $res=mysql_query("delete from faculty where id='$id'");
	 
   }
	   
	   
	   
   	   
   }
   
    

?>

<html>
<title>Delete Page</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/twobar.css">
<style>
#box
{
	margin-left:20%;
}
</style>
</head>
<body>
<body bgcolor="powderblue">
<div id="outer"></br>
   <div id="navigation"> </br>
     <h1><b>Online Attendance Management System</b></h1>
      
         </div></br>
      <div id="tool"></br>
	  <div id="box">
       <ul>
	   <li><a class="home" href="index.php">Home</a></li>

	   <li><a class="logout"href="logout.php">Logout</a></li>
	   	   <li><a class="student"href="facultylogin.php">Back</a></li>
	   </ul>
	   </div>
         </div></br></br>
		 
		 <div id="content">
		 
         <h1>Successfully faculty<b><?php echo $name;?> Deleted... </h1>
		
             </div>


</div>




</body>
</html>
