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
	
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $email = $_POST['emails'];
   $password = $_POST['pword'];
   $conpassword = $_POST['cpassword'];
   $gender = $_POST['sex'];
   
	
   $sql = "INSERT INTO signup (firstname,lastname,email,password,conpassword,gender) VALUES ('$firstname','$lastname','$email','$password','$conpassword','$gender')";
	
   if(!mysqli_query($con,$sql))
   {
		echo 'Not inserted';
   }
   else
   {
		echo 'Inserted';
   }		
	
   
	

?>	