<html>
<title>Student Registration</title>
<head>
<link rel="stylesheet"type="text/css"href="stylesheet/register.css">
<script src="jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet"type="text/css"href="jquery-ui/jquery-ui.css">
<link rel="stylesheet"type="text/css"href="jquery-ui/jquery-ui.structure.css">
<link rel="stylesheet"type="text/css"href="jquery-ui/jquery-ui.theme.css">
</head>
<body>
<div class="outer"></br>
   
   <div class="outer-left">
      <div class="form-content"></br>
	          <div class="form-header">
                  <h1><b>Student Registration Form</h1></b>
				        <hr>
						</hr>
                        </div>
					<form action="stddata.php"method="post"name="stdform"> 
										<!--<form action="stddata.php"method="post"name="stdform"onsubmit="return Validate()"> -->
				<div class="details">
                   <h1><b>1. Student Details:</h1></b>	
				   <div class="register">

                     <div class="form-partition">
					    <div class="form-partition-1">
                    <div class="left">
                        <p id="fname">Full Name:</p>
	                     <input type="text"name="fname"placeholder="Enter full name"required>
						 <!--<div id="error_fname"class="error"></div>-->
	                      <p id="dob">Date of Birth:</p>
	                    <input type="date"name="dob"placeholder="yyyy-mm-dd">
   						 <!--<div id="error_dob"class="error"></div>-->
						<p id="mob">Mobile:</p>
	                    <input type="text"name="mob"placeholder="Enter number">
						<!--<div id="error_mob"class="error"></div>-->
                               <p id="father-occup">Father Occupation:</p>
	                    <input type="text"name="fatheroccup">
     
                            </div>
	                     <div class="middle">
                          <p id="fathername">Father Name:</p>
	                       <input type="text"name="fathername"placeholder="Enter father name">
						<!--   <div id="error_fathername"class="error"></div>-->
                              <p id="gender">Gender:</p>
	                      <select name="gender">
						  <option>Male</option>
						  <option>Female</option>
						      </select>
                           <p id="guar-name">Guardian Name:</p>
	                      <input type="text"name="guarname"placeholder="Enter guardian name">
                       	<!-- <div id="error_guarname"class="error"></div>     --> 
								 <p id="mother-occup">Mother Occupation:</p>
	                    <input type="text"name="motheroccup">
       
                                  </div>
				 <div class="right">
                          <p id="mothername">Mother Name:</p>
	             <input type="text"name="mothername"placeholder="Enter mother name">
         		<!--<div id="error_mothername"class="error"></div>       -->              
							  <p id="mail">Email:</p>
	                  <input type="email"name="email"placeholder="Enter Email">
					 <!-- <div id="error_email"class="error"></div> -->
                          <p id="guar-mob">Guardian Number:</p>
	                      <input type="text" name="guarmob" placeholder="Enter guardian number">
                               <!--  <div id="error_guarmob"class="error"></div> -->
								 <p id="Cat">Category:</p>
								 <select name="cat">
								 <option>select</option>
								 <option>General</option>
								 <option>Minority</option>
								 <option>OBC</option>
								 <option>SC/ST</option>
								 </select>
	                   <!-- <input type="text"name="category"placeholder="select your category">-->
                                  
                                  </div>
								  
								</div>
								  
								 
						</div>  						   
                         </div>
                    		<hr>
                          </hr>							
                        </div> 

						<div class="details">
                   <h1><b>2. Location Details:</h1></b>	
				   <div class="register">

                     <div class="form-partition">
					
					    <div class="form-partition-2">
                    <div class="left">
                        <p id="add">Address:</p>
	                     <input type="text"name="add"placeholder="Enter your address">
	                     <!-- <div id="error_add"class="error"></div> -->
						  <p id="city">City</p>
	                    <input type="text"name="city"placeholder="Enter your city">
                                <!--  <div id="error_city"class="error"></div> -->
                            </div>
	                     <div class="middle">
                          <p id="per-add">permanent Address:</p>
	                       <input type="text"name="peradd"placeholder="Enter permanent address">
                          <!--<div id="error_peradd"class="error"></div>                  -->                 
								  <p id="pin">Pincode:</p>
	                    <input type="text"name="pin"placeholder="Enter pincode">
                        <!-- <div id="error_pin"class="error"></div> -->
                                  </div>
				            <div class="right">
                          
                                 <p id="state">State:</p>
	                      <input type="text"name="state"placeholder="Enter State name">
                        <!-- <div id="error_state"class="error"></div> -->
                                  </div>
								  
								</div>
								  
								 
						</div>  						   
                         </div>
                    		<hr>
                            </hr>							
                        </div> 
						
						<div class="details">
                   <h1><b>3. Academic Details:</h1></b>	
				   <div class="register">

                     <div class="form-partition">
					
					    <div class="form-partition-3">
                    <div class="left">
                        <p id="hs">High School Board:</p>
	                     <select name="hs">
						 <option>select</option>
						 <option>CBSE</option>
						 <option>ICSE</option>
						 <option>UP</option>
						   </select>
	                      <!--<div id="error_hs"class="error"></div> -->
						  <p id="hsper">High School %</p>
	                    <input type="text"name="hsper"placeholder="Enter high school percentage">
						<!--<div id="error_hsper"class="error"></div> -->
                            <p id="inper">Inter %</p>
	                    <input type="text"name="inper"placeholder="Enter Inter percentage">
                     <!-- <div id="error_inper"class="error"></div> -->
                            </div>
	                     <div class="middle">
                          <p id="hsroll">High School Rollno:</p>
	                       <input type="text"name="hsroll"placeholder="Enter High school rollno">
						  <!-- <div id="error_hsroll"class="error"></div> -->
                                   <p id="in">School Name:</p>
	                    <input type="text"name="schoolname"placeholder="Enter school name">
						<!-- <div id="error_schoolname"class="error"></div> -->
                             <p id="in">College Name:</p>
	                    <input type="text"name="cllgname"placeholder="Enter college name">
						<!-- <div id="error_cllgname"class="error"></div> -->
               
                                  </div>
				            <div class="right">
                          
                                 <p id="hsyear">High School Year:</p>
	                      <input type="text"name="hsyear"placeholder="Select year">
						 <!-- <div id="error_hsyear"class="error"></div> -->
                           <p id="uniroll">University Rollno:</p>
	                      <input type="text"name="uniroll"placeholder="Enter Rollno"required>
                       <!--  <div id="error_uniroll"class="error"></div> -->
						  <p id="in">University Board:</p>
	                    <input type="text"name="uniboard"placeholder="Enter university board">
						<!-- <div id="error_uniboard"class="error"></div> -->

                                  </div>
								  
								</div>
								  
								 
						</div>  						   
                         </div>
                    		<hr>
                            </hr>							
                        </div> 
						
						<div class="details">
                   <h1><b>4. Office Details:</h1></b>	
				   <div class="register">

                     <div class="form-partition">
					
					    <div class="form-partition-4">
                    <div class="left">
                        <p id="stdid">Student College Id:</p>
	                     <input type="text"name="stdid"placeholder="Enter student id">
						 <!--<div id="error_stdid"class="error"></div> -->
	                      <p id="branch">Branch:</p>
	                    <input type="text"name="branch"placeholder="Enter branch">
  
                            </div>
	                     <div class="middle">
                          <p id="batch">Batch:</p>
	                       <input type="text"name="batch"placeholder="Enter Batch">
                                   <p id="year">Year:</p>
	                    <input type="text"name="year"placeholder="Enter year"required>
                         
                                  </div>
				            <div class="right">
                          
                                 <p id="course">Course:</p>
								 <select name="course">
								 <option>select</option>
								 <option>Bachelor of technology</option>
								 <option>Bachelor of Pharmacy</option>
								 <option>Master of Technology</option>
								 <option>Bachelor of Computer Science </option>
								 </select>
	                     <!-- <input type="text"name="course"placeholder="Select Course">-->
                            <p id="pass">Password:</p>
	                      <input type="password"name="pass"placeholder="Enter Password"required>
						  <!--<div id="error_pass"class="error"></div> -->
 
                                  </div>
								  
								</div>
								  
								 
						</div>  						   
                      
    					     </div>
                         </div>	                									
                        
                        <div class="control">
						<input type="submit"name="register"value="Register"></input>
						<input type="reset"name="reset"value="Reset"></input>
                          </div>
						  
				       </form>	
                         </div>						
            </div>
           </div>
   <div class="outer-right">
        </div>

<script type="text/javascript"src="javascript/stdval.js"></script>
</div>
</body>
</html>