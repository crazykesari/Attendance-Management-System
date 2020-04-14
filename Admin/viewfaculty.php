 <?php 
 include('session.php');
 ?>
<html>
</html>
<head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}
th
{
	font-size:20px;
	opacity:0.8;
}
td
{
	font-size:20px;
}
tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color:#fff}
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 100px; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
	margin-top:172px;
}

.modal-content {
    background-color: #fff;
    margin: auto;
    padding: 20px;
    width: 30%;
	border-radius:25px 25px 25px 25px;
}

#pop input[type="text"]
{
width:80%;
	border:none;
	height:35px;
	font-size:17px;
    margin-left:0px;
	display:inline-block;
	background:#ffeefe;
	padding:0 15;
	color:black;
	border-radius:3px;
	}
	#pop p
	{
	font-size:20px;
	font-family:Arial;
	opacity:0.5;
	}
	#pop input[type="submit"]
 {
    border:none;
	outline:none;
	height:40px;
	background:#1c8adb;
	color:#fff;
	border-radius:20px;
	text-align:center;
	width:50%;
    margin-top:10px;
	
	}
#pop input[type="submit"]:hover{
 
 cursor:pointer;
 background:#39dc79;
 color:#000;
 }
.link
{
	text-decoration:none;
	color:#fff;
	padding:8 8;
	background:blue;
	cursor:pointer;
}
.link:hover
{
	color:green;
	transition:0.3s;
	cursor:pointer;
	background:#39dc79;
}

</style>
<link rel="stylesheet"type="text/css"href="stylesheet/twobar.css">
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

	   <li><a class="attendance"href="faculty.php">Back</a></li>
	   <li><a class="login"href="logout.php">Logout</a></li>

	   
	   </ul>
	   </div>
         </div></br></br>



<?php

    if(isset($_POST['view']))
	{
		$id=$_POST['id'];
		$branch=$_POST['branch'];
		$con=mysql_connect("localhost","root","");
		mysql_select_db("attendance",$con);
		echo "<div style='overflow-x:auto;'>";
        echo " <table >";
        echo "<tr>";
        echo "<th>Sno</th>";
        echo "<th>Name</th>";
        echo "<th>facultyid</th>";
        echo "<th>password</th>";
        echo " <th>Mobile</th>";
        echo "<th>Email</th>";
        echo "<th>Branch</th>";
        echo "<th>Subject</th>";
        // echo "<th>Delete Faculty</th>";
          echo "</tr>";

		if(empty($id)&&!empty($branch))
		{
			$s="select * from faculty where branch='$branch'";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['id']."</td>";
                echo "<td>".$p['password']."</td>";
                echo " <td>".$p['mobile']."</td>";
                 echo "<td>".$p['email']."</td>";
         	    echo "<td>".$p['branch']."</td>";
                echo "<td>".$p['subject']."</td>";
          //      echo "<td>"."<span id='myBtn'class='link'>Delete</span>";
                echo "</tr>";	
		  				
            }				
			echo "</table>";
			echo "</div>";
			
		}
		if(!empty($id)&&empty($branch))
		{
			$s="select * from faculty where id='$id'";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['id']."</td>";
                echo "<td>".$p['password']."</td>";
                echo " <td>".$p['mobile']."</td>";
                 echo "<td>".$p['email']."</td>";
         	    echo "<td>".$p['branch']."</td>";
                echo "<td>".$p['subject']."</td>";
            //    echo "<td>"."<span id='myBtn'class='link'>Delete</span>";
                echo "</tr>";		
            }				
			echo "</table>";
			echo "</div>";
		}
		if(!empty($id)&&!empty($branch))
		{
			$s="select * from faculty where branch='$branch' and id='$id'";
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
			for($i=1;$i<=$rows;$i++)
			{
				$p = mysql_fetch_assoc($resource);
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$p['Name']."</td>";
                echo "<td>".$p['id']."</td>";
                echo "<td>".$p['password']."</td>";
                echo " <td>".$p['mobile']."</td>";
                 echo "<td>".$p['email']."</td>";
         	    echo "<td>".$p['branch']."</td>";
                echo "<td>".$p['subject']."</td>";
              //  echo "<td>"."<span id='myBtn'class='link'>Delete</span>";
                echo "</tr>";		
            }				
			echo "</table>";
			echo "</div>";
		}
	}
?>
</div>
</body>
</html>
