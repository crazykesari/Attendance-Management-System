 <?php 
 include('session.php');
 ?>
<html>
<title>Faculty Page</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/twobar.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
#parent
{

	width:1000px;
	height:300px;
	background:white;

	margin:0px auto;
	margin-top:-20px;
	}

#parent #child1
{
	float:left;
    margin-left:20px;	

	width:300px;
	height:0px;
	margin-top:30px;
}
#parent #child2
{
	float:left;
    margin-left:20px;	

	width:300px;
	height:250px;
		margin-top:30px;
}
#parent #child3
{
	float:left;
    margin-left:20px;	
	width:300px;
	height:250px;
		margin-top:30px;
}
.font
{
	margin-top:25%;
	font-size:30px;
	font-family:sans-serif;
	text-align:center;
    color:#fff;
	padding:10 10;
	background:rgba(0,0,0,0.6);
	
	cursor:pointer;
	filter:drop-shadow(16px 16px 16px powderblue);
	border-radius:25px 25px 25px 25px;
}
.link
{
	text-decoration:none;
	color:#fff;
}
.link:hover
{
	color:green;
	transition:0.3s;
}

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

#popview input[type="text"], #popdel input[type="text"]
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
	#popview p ,#popdel p
	{
	font-size:20px;
	font-family:Arial;
	opacity:0.5;
	}
	#popview input[type="submit"] ,#popdel input[type="submit"]
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
#popview input[type="submit"]:hover ,#popdel input[type="submit"]:hover{
 
 cursor:pointer;
 background:#39dc79;
 color:#000;
 }
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

	   <li><a class="attendance"href="index.php">Back</a></li>
	   <li><a class="login"href="login.php">Logout</a></li>

	   
	   </ul>
	   </div>
         </div></br></br>
		 
		 		 <div id="parent">
		   <div id="child1">
		      <p class="font"><a class="link"href="facultyregister.php">Add Faculty</a></p>
		      </div>
		   <div id="child2">
		   		      <p class="font"><span id="myBtn"class="link">View Faculty</span></p>
		      </div>
		   <div id="child3">
		   		      <p class="font"><span id="myBtn1"class="link">Delete Faculty</a></p>
		      </div>
                                       
		
             </div>

			 <div id="popview">
<div id="myModal" class="modal">
 
  <!-- Modal content -->
  <div class="modal-content">
 <span class="close0"></span>
    <form action="viewfaculty.php"name="vform"method="post"style="text-align:center; font-size:30px">
	   <p>FacultyId:</p>
	   <input type="text"name="id"></br></br>
	   <span style="color:blue;font-size:20px; font-family:sans-serif;border:1px solid blue"><b>OR</b></span>
	   <p>Branch:</p>
	   <input type="text"name="branch"value="Computer Science" ></br></br>
	   <input type="submit"name="view" value="Submit">
	  </form>
  </div>

</div>
</div>

 <div id="popdel">
<div id="myModal1" class="modal">
 
  <!-- Modal content -->
  <div class="modal-content">
     <span class="close1"></span>


	<p style="font-size:27px">Delete Faculty</p> 
	<hr></hr>
	      <form action="facultydelete.php"method="post"name="delform" onsubmit="return Validate()"style="text-align:center; font-size:25px">
    	 <p>FacultyId:</p>
	   <input type="text"name="id"></br></br>
	   <input type="submit"name="del" value="Submit">
	  </form>
  </div>
<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close0")[0];
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1||event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
</body>
</html>
  <script>
  var modal1 = document.getElementById('myModal1');
  var btn1 = document.getElementById("myBtn1");
  var span1 = document.getElementsByClassName("close1")[0];

  btn1.onclick = function() {
    modal1.style.display = "block";
}  
span.onclick = function() {
    modal1.style.display = "none";
}  
  window.onclick = function(event) {
    if (event.target == modal1||event.target==modal) {
        modal1.style.display = "none";
		modal.style.display="none";
    }
}

  function Validate()
  {
	  var check = document.delform.id.value;
	  if(check=="")
	  {
		  alert("FacultyId is required");
		  return false;
	  }
  }
  
  </script>
  
  