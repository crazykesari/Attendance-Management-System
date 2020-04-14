
<html>
<title>Registration</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/register.css">
<link rel="stylesheet"type="text/css"href="stylesheet/fregister.css">
</head>
<div class="fouter"></br>
   
   <div class="fouter-left">
      <div class="form-content"></br>
	          <div class="form-header">
                  <h1><b>Faculty Registration Form</h1></b>
				        <hr>
						</hr>
                        </div>
						<form action="facultylogin.php"method="post"name="fform"onsubmit="return Validate()"> 
				<div class="details"></br>
                   <div class="register">

                     <div class="form-partition">
					    <div class="form-partition-5">
                    <div class="left">
                        <p id="fname">Full Name:</p>
	                     <input type="text"name="fname"placeholder="Enter full name">
						  <div id="error_fname"class="error"></div>
	                                  <p id="mob">Mobile:</p>
	                    <input type="text"name="mob"placeholder="Enter number">
                  <div id="error_mob"class="error"></div>
                            </div>
	                     <div class="middle">
                              <p id="fid">faculty-ID:</p>
	                      <input type="text"name="fid"placeholder="Enter the id">
						   <div id="error_fid"class="error"></div>
                              <p id="mail">Email:</p>
	                  <input type="email"name="email"placeholder="Enter Email">
                          <div id="error_email"class="error"></div>
                                  </div>
				 <div class="right">
                               <p id="fpass">Password:</p>
	                    <input type="password"name="pass"placeholder="Enter password">
                           <div id="error_password"class="error"></div>
						  <p id="branch">Branch:</p>
	                      <input type="text" name="branch" value="computer Science" readonly>
                                   <div id="error_branch"class="error"></div>
                                  </div>
								  
								</div>
								  
								 
						</div>  						   
                         </div>
						
                        </div> 


				<div id="subject">

                   <p id="subject">Subject:</p>
				   <input id="check"type="checkbox" name="sub[]" value="webtechRCS052"> Web Technolgies
                   <input id="check"type="checkbox" name="sub[]" value ="pplRCS503"> PPL
                   <input id="check"type="checkbox" name="sub[]" value="AlgorithmRCS502">Algorithm</br>
				   <input id="check"type="checkbox" name="sub[]" value="DbmsRCS501"> DBMS &nbsp &nbsp &nbsp &nbsp &nbsp 
                   <input id="check"type="checkbox" name="sub[]" value="sociologyRAS502"> Sociology
                   <input id="check"type="checkbox" name="sub[]" value="economicsRAS501">Economics
				  

                  </div> 
                	<div class="control">
						<input type="submit"name="register"value="Register"></input>
						<input type="reset"name="reset"value="Reset"></input>
                          </div>						
						
						
						
  </div>
   <div class="outer-right">
        </div>

</div>
<script type="text/javascript"src="javascript/facultyval.js"></script>

</body>
</html>						
<?php
  if(isset($_POST["register"]))
	  {
	     if(empty($_POST['sub']))
		 {
			 echo "<script>";
			 echo "alert('Subject is required')";
			 echo "</script>";
		 }
	  }
?>