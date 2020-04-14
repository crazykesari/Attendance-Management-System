<?php 

       $i=1;

	   $present=0;
	   $absent=0;
       if(isset($_POST['sub']))
	   {
		   mysql_connect("localhost","root","");
		   mysql_select_db("attendance");
           		   $subject= $_POST['subject'];
		   $s = "select * from cs3a where sno>0";
		   $resource = mysql_query($s);
		   $row = mysql_num_rows($resource);

              for($i=1;$i<=$row;$i++)
		      {
			   $ret = mysql_fetch_assoc($resource);
               if($_POST['attend'.$i]==1)
			   {

                  $value=$ret[$subject];
                   $value++;
				   
                   $ss="UPDATE cs3a SET $subject=$value where sno=$i";
				   
				   $result=mysql_query($ss);
				   if($result==1)
				   {

				   }
				   else
				   {
					   echo mysql_error();
				   }
			   }					

		
		   }



       $sss= "select * from cs3a";
	   $e=mysql_query($sss);
	   $t=mysql_fetch_assoc($e);
	   $total=$t[$subject];
	   echo $total;
	   $total++;
	    $tt=mysql_query("UPDATE cs3a SET $subject=$total where sno=0");
		  
		  echo $tt;
		  if($tt==1)
		  {
			 header('location:lastlogout.php');  
		  }
		  else
		  {
			  echo mysql_error();
		  }
	         
		
	   }
?>