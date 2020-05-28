<?php
include('session.php');
?>
<html>
<title>Student Page</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/homepage.css">
<style>
#box
{
	margin-left:300px;
}
#child
{
	width:100%;
		max-width:1200px;
	background:powderblue;
	height:500px;
margin:0px auto;
}
#block1
{
   width:350px;
	height:200px;
	background:#fff;
	margin:0px auto;
}
#block1 p
{
	font-size:20px;
	margin-top:0px;
    font-family:sans-serif;

	margin-left:20px;
}
	#block2
	{
		height:500px;
		width:100%;
		background:#fff;
		margin-top:20px;
		border:1px solid green;
	}
	#block2 h1
	{
		color:blue;
		font-size:30px;
		font-family:Aerial;
		margin-top:30px;
		margin-left:50px;
		padding:0 50;
        
	}
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

</style>
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
	   <li><a class="logout"href="logout.php">Logout</a></li>
	   	   <li><a class="home" href="login.php">Back</a></li>
	   
	   </ul>
	   </div>
         </div></br></br>
		 
		 <div id="child">
          <div id="block1"></br>
            <?php 
			       $con=mysql_connect("localhost","root","");
				   mysql_select_db("attendance",$con);
				   $ret="select Name,UnivRoll,Stdid from studentdetails where Stdid='$login_session'";
				   $ftt=mysql_query($ret);
				   $ft=mysql_fetch_assoc($ftt);
				   $check=$ft['UnivRoll'];
				   $std="select * from cs3a where rollno='$check'";
				   $ss=mysql_query($std);
				   $las=mysql_fetch_assoc($ss);
				   $stds="select * from cs3a where sno=0";
				   $sss=mysql_query($stds);
				   $tot=mysql_fetch_assoc($sss);
				   $a1=$tot['webtechRCS052']-$las['webtechRCS052'];
				   $t1=round(($las['webtechRCS052']/$tot['webtechRCS052'])*100);
				     $a2=$tot['DbmsRCS501']-$las['DbmsRCS501'];
				   $t2=round(($las['DbmsRCS501']/$tot['DbmsRCS501'])*100);
				        $a3=$tot['AlgorithmRCS502']-$las['AlgorithmRCS502'];
				   $t3=round(($las['AlgorithmRCS502']/$tot['AlgorithmRCS502'])*100);
                  $a4=$tot['sociologyRAS502']-$las['sociologyRAS502'];
				   $t4=round(($las['sociologyRAS502']/$tot['sociologyRAS502'])*100);
				   $a5=$tot['pplRCS503']-$las['pplRCS503'];
				   $t5=round(($las['pplRCS503']/$tot['pplRCS503'])*100);
				   $a6=$tot['economicsRAS501']-$las['economicsRAS501'];
				   $t6=round(($las['economicsRAS501']/$tot['economicsRAS501'])*100);
				   echo "<p>Name:<b>&nbsp".$ft['Name']."</b></p>";
				   echo "<p>StudentId:<b>&nbsp".$ft['Stdid']."</b></p>";
				   echo "<p>UnivRoll:<b>&nbsp".$ft['UnivRoll']."</b></p>";
				   echo "</div>";
				   echo "<div id='block2'>";
                      		echo "<div style='overflow-x:auto;'>";
                        echo " <table >";
                       echo "<tr>";
                      echo "<th>Subject</th>";
                      echo "<th>Present</th>";
                     echo "<th>Absent</th>";
                     echo "<th>Percentage</th>";
                      echo "</tr>";
					    echo "<tr>";
                      echo "<th>Webtechnology[RCS052]</th>";
                      echo "<th>".$las['webtechRCS052']."</th>";
                     echo "<th>".$a1."</th>";
                     echo "<th>".$t1."</th>";
                      echo "</tr>";
					    echo "<tr>";
                      echo "<th>DataBaseManagement[RCS501]</th>";
                      echo "<th>".$las['DbmsRCS501']."</th>";
                     echo "<th>".$a2."</th>";
                     echo "<th>".$t2."</th>";
                      echo "</tr>";
					    echo "<tr>";
                      echo "<th>DesignAlgorithm[RCS502]</th>";
                      echo "<th>".$las['AlgorithmRCS502']."</th>";
                     echo "<th>".$a3."</th>";
                     echo "<th>".$t3."</th>";
                      echo "</tr>";
					   echo "<th>IndustrialSociology[RAS502]</th>";
                      echo "<th>".$las['sociologyRAS502']."</th>";
                     echo "<th>".$a4."</th>";
                     echo "<th>".$t4."</th>";
                      echo "</tr>";
					    echo "<tr>";
                      echo "<th>PrincipleofProgramming[RCS503]</th>";
                      echo "<th>".$las['pplRCS503']."</th>";
                     echo "<th>".$a5."</th>";
                     echo "<th>".$t5."</th>";
                      echo "</tr>";
					    echo "<tr>";
                      echo "<th>ManagerialEconomics[RAS501]</th>";
                      echo "<th>".$las['economicsRAS501']."</th>";
                     echo "<th>".$a6."</th>";
                     echo "<th>".$t6."</th>";
                      echo "</tr>";

					  echo "</table>";
				   echo "</div>";
				   ?>
				   
           
          </div>



</div>
</body>
</html>