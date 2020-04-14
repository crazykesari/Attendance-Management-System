<?php
include('session.php');     
?>
<html>
<title>Take Attendance</title>
<head>
<style>
#outer{
	width:100%;
	background:powderblue;
		filter:drop-shadow(16px 16px 20px silver);
      margin-top:-20px;
	}
#content{

	margin-top:0px;
	width:1200px;
	font-size:30px;
	color:#512eff;
		margin-left:20px;


}
#content ul{
	list-style:none;

	}
#content li{
	display:inline;
	
}
.sno{
	margin-left:30px;
}
.id{
	margin-left:50px;
}
.name
{
	margin-left:50px;
}
.roll{
	margin-left:120px;
}
.attend
{
	margin-left:250px;
}
#navigation{
	height:100px;
	width:100%;
     margin:0px auto;
	margin:5px 5px 0px 5px;
	background:rgba(0,0,0,0.5);
	margin-left:0px;
	margin-top:-20px;
}
#navigation h1{
	color:#fff;
	text-align:center;
	font-size:50px;
	margin-top:0px;

	font-family:bold;
}
#fetch
{
	font-family:sans-serif;
	font-size:28px;
	color:#333;
}
#tool 
{
	height:50px;
	width:100%;
	background:blue;
	margin-top:-20px;
	filter:drop-shadow(16px 16px 20px silver);
}
#box{
	margin-top:-30px;
font-size:25px;
font-family:sans-serif;
margin-left:100px;
}
ul{
list-style:none;
}

#box li .logout
{
	display:inline;
		color:#333;
  background:#eae3cc;
  border-radius:15px 15px 15px 15px;
  padding:3 25;
  line-height:1em;
  cursor:pointer;
margin-left:1000px; 

 
}
#box a
{	color:#333;
text-decoration:none;
	padding:10 10;
	transition:1s;

}
#box li:hover
{
	background:green;
	transition:1s;
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
	margin-left:35%;
	width:25%;
	margin-top:50px;
	
	}
select
{
    width:300px;
	border:none;
	height:35px;
	font-size:17px;

	display:inline-block;
	background:#ffeefe;
	padding:0 15;
	color:black;
	border-radius:3px;
    
	margin-left:50px;
	
}
#logic p
{
			opacity:0.5;
			font-size:25px;
			margin-left:50px;
			
}

#selector
{
	height:250px;
	width:400px;
	background:white;
		margin:0px auto;
margin-top:-50px;
		}
#logic
{
	


	margin-top:0px;
	background:white;
   
	filter:border-shadow(16px 16px 20px blue);
}


#logicright
{
	float:left;
	}
input[type="submit"]:hover
{
	background:#39dc79;
	cursor:pointer;
	color:#000;
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
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.css">
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.structure.css">
<link rel="stylesheet"type="text/css"href="jquery/jquery-ui.theme.css">

</head>
<body>
<div id="outer"></br>
<div id="navigation"> </br>
     <h1><b>Online Attendance Management System</b></h1>
      
         </div></br>
		 <div id="tool"></br>
	  <div id="box">
       <ul>
	   
	   <li><a class="logout"href="logout.php">Logout</a></li>
	   
	   </ul>
	   </div>
         </div></br>
		 <div id="selector">
		 <form action="confirm.php"method="post"name="attendance"onsubmit="return Validate()">
		<div id="logic">
		  <div id="logicright">
		  <?php
		    mysql_connect("localhost","root","");
			mysql_select_db("attendance");
			$s = "select subject from faculty where id='$login_session'";
			$resource=mysql_query($s);
			$row = mysql_fetch_assoc($resource);
			$arr = explode(" ",$row['subject']);
			$arrlen=count($arr);
			
		 echo "<p>Subject:</p>";
		 echo "<select name='subject'id='su'>";
		 echo "<option>select</option>";
			for($i=0;$i<$arrlen;$i++)
			  {
				  echo "<option>$arr[$i]</option>";
			  }  
			echo "</select>";
			?>
		   </div>
		   </div>
		   <div class="control">
		    <input type="submit"name="sub"value="Submit"></input>
		   
		   </div>
		   </div></br>
<div id="fetch">
<?php 
       mysql_connect("localhost","root","");
	   mysql_select_db("attendance");
	   $s="select stdid,UnivRoll,Name from studentdetails,cs3a where UnivRoll=rollno";
	   $resource=mysql_query($s);
	   $count=mysql_num_rows($resource);
	   echo "<div style='overflow-x:auto;'>";
        echo " <table >";
        echo "<tr>";
        echo "<th>Sno</th>";
        echo "<th>Name</th>";
        echo "<th>Student id</th>";
        echo "<th>Rollno</th>";
        echo "<th>Attendance</th>";
		echo "</tr>";
	   for($i=1;$i<=$count;$i++)
	   {
		   $row = mysql_fetch_assoc($resource);
		  /*echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$i."  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$row['stdid']."&nbsp &nbsp &nbsp &nbsp".$row['UnivRoll']."&nbsp &nbsp &nbsp &nbsp".$row['Name'];
		    echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type='radio'name='attend$i'checked value='1'>Present
			      <input type='radio'name='attend$i'value='0'>Absent";
				  echo "<hr>";*/
				  
				  echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['stdid']."</td>";
                echo "<td>".$row['UnivRoll']."</td>";
                echo " <td><input type='radio'name='attend$i'checked value='1'>Present<input type='radio'name='attend$i'value='0'>Absent</td>";
                 echo "</tr>";
	   }
         echo "</table>";
			echo "</div>";
			

?>
</div>
</div>
 </form>

<script src="jquery.js"></script>
<script src="jquery/jquery-ui.js"></script>

</div>
</body>
</html>

<script>
function Validate()
{
var check=document.attendance.subject.value;
if(check=='select')
{
	alert("Subject is require");
	return false;
}
}
</script>	

