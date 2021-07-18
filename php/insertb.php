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
	
   $name = $_POST['username'];
   $pnum = $_POST['phonenumber'];
   $mail = $_POST['emails'];
   $quantity = $_POST['person'];
   $arrivaldate = $_POST['datee'];
   $arrivaltime = $_POST['timee'];
   
   
	
   $sql = "INSERT INTO book (name,pnum,mail,quantity,arrivaldate,arrivaltime) VALUES ('$name','$pnum','$mail','$quantity','$arrivaldate','$arrivaltime')";
	
   if(!mysqli_query($con,$sql))
   {
		echo 'Not inserted';
   }
   else
   {
		echo 'Inserted';
   }		
	
   
	

?>	