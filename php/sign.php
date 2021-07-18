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
	
   $firstname= $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $password=$_POST['password'];
   $conpassword= $_POST['conpassword'];
   $gender= $_POST['gender'];
   $age= $_POST['age'];
	
   $sql = "INSERT INTO signup (firstname,lastname,email, password, conpassword,gender,age) VALUES ('$firstname','$lastname','$password','$conpassword','$gender','$age')";
	
   if(!mysqli_query($con,$sql))
   {
		echo 'Not inserted';
   }
   else
   {
		echo 'Inserted';
   }		
	
   header("refresh:2; url=sign.html");
	

?>	