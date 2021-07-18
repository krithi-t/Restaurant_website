<?php

   $con = mysqli_connect('127.0.0.1','root','');
   
   if(!$con)
   {
	   echo 'Not connected';
   }
   
   if(!mysqli_select_db($con,'iwp'))
   {
		echo 'Database not selected';
   }
	
   $name = $_POST['cname'];
   $pnum = $_POST['cnum'];
   $mail = $_POST['cmonth'];
   $expyr= $_POST['cyear'];
   $adate = $_POST['ccvv'];
   $atime = $_POST['cpin'];
   $address = $_POST['cadd'];
   
   
   
	
   $sql = "INSERT INTO pay (name,pnum,mail,expyr,adate,atime,address) VALUES ('$name','$pnum','$mail','$expyr','$adate','$atime','$address')";
	
   if(!mysqli_query($con,$sql))
   {
		echo 'Not inserted';
   }
   else
   {
		echo 'Inserted';
   }		
	
   
	

?>	