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

	   <li><a class="attendance"href="student.php">Back</a></li>
	   <li><a class="login"href="logout.php">Logout</a></li>

	   
	   </ul>
	   </div>
         </div></br></br>



<?php

    if(isset($_POST['view']))
	{
		$id=$_POST['id'];
		$section=$_POST['section'];
		$con=mysql_connect("localhost","root","");
		mysql_select_db("attendance",$con);
		echo "<div style='overflow-x:auto;'>";
        echo " <table >";
        echo "<tr>";
        echo "<th>Sno</th>";
        echo "<th>Name</th>";
        echo "<th>Studentid</th>";
        echo " <th>Rollno</th>";
		        echo "<th>Total Lecture</th>";
        echo "<th>Present  </th>";
        echo "<th>Absent</th>";
        echo "<th>Percentage</th>";
          echo "</tr>";
         $to=mysql_query("select * from cs3a where sno=0"); 
			$t = mysql_fetch_assoc($to);
			$total=0;
			$total=$total+$t['webtechRCS052']+$t['pplRCS503']+$t['AlgorithmRCS502']+$t['DbmsRCS501']+$t['sociologyRAS502']+$t['economicsRAS501'];
		if(empty($id)&&!empty($section))
		{
			$s="select * from cs3a where sno>0"; 
			$resource=mysql_query($s);
			$rows=mysql_num_rows($resource);
			$i=1;
             
			for($i=1;$i<=$rows;$i++)
			{
							$present=0;
							$per=0;
				$p = mysql_fetch_assoc($resource);
				$che=$p['rollno'];
				$st="select Name,Stdid from studentdetails,cs3a where UnivRoll='$che'";
                 $sss=mysql_query($st);				
				$res=mysql_fetch_assoc($sss);
				$present=$present+$p['webtechRCS052']+$p['pplRCS503']+$p['AlgorithmRCS502']+$p['DbmsRCS501']+$p['sociologyRAS502']+$p['economicsRAS501'];
				$per=round(($present/$total)*100);
				$absent = $total -$present;
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$res['Name']."</td>";
                echo "<td>".$res['Stdid']."</td>";
                echo "<td>".$p['rollno']."</td>";
         	    echo "<td>".$total."</td>";
                echo " <td>".$present."</td>";
                 echo "<td>".$absent."</td>";

                echo "<td>".$per."</td>";
                echo "</tr>";
		  				
            }				
			echo "</table>";
			echo "</div>";
			
		}
		if(!empty($id)&&empty($section))
		{
						$i=1;
             
							$present=0;
							$per=0;
						                 			
				    $st="select * from studentdetails,cs3a where Stdid='$id'";
                    $sss=mysql_query($st);
					$res = mysql_fetch_assoc($sss);
					$che=$res['UnivRoll'];
					
                    $s="select * from cs3a where rollno='$che'"; 
			        $resource=mysql_query($s);
			         $p = mysql_fetch_assoc($resource);
				$present=$present+$p['webtechRCS052']+$p['pplRCS503']+$p['AlgorithmRCS502']+$p['DbmsRCS501']+$p['sociologyRAS502']+$p['economicsRAS501'];
				$per=round(($present/$total)*100);
				$absent = $total -$present;
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$res['Name']."</td>";
                echo "<td>".$res['Stdid']."</td>";
                echo "<td>".$p['rollno']."</td>";
         	    echo "<td>".$total."</td>";
                echo " <td>".$present."</td>";
                 echo "<td>".$absent."</td>";
                echo "<td>".$per."</td>";
                echo "</tr>";
										
				
		  				
		
            				
			echo "</table>";
			echo "</div>";
		}
		if(!empty($id)&&!empty($section))
		{
				$i=1;
             
							$present=0;
							$per=0;
						                 			
				    $st="select * from studentdetails,cs3a where Stdid='$id'";
                    $sss=mysql_query($st);
					$res = mysql_fetch_assoc($sss);
					$che=$res['UnivRoll'];
					
                    $s="select * from cs3a where rollno='$che'"; 
			        $resource=mysql_query($s);
			         $p = mysql_fetch_assoc($resource);
				$present=$present+$p['webtechRCS052']+$p['pplRCS503']+$p['AlgorithmRCS502']+$p['DbmsRCS501']+$p['sociologyRAS502']+$p['economicsRAS501'];
				$per=round(($present/$total)*100);
				$absent = $total -$present;
				echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$res['Name']."</td>";
                echo "<td>".$res['Stdid']."</td>";
                echo "<td>".$p['rollno']."</td>";
         	    echo "<td>".$total."</td>";
                echo " <td>".$present."</td>";
                 echo "<td>".$absent."</td>";
                echo "<td>".$per."</td>";
                echo "</tr>";
										
                    
		  				
		
			echo "</table>";
			echo "</div>";
		}
	}
?>
</div>
</body>
</html>
