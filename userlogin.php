<?php
	$host = "fdb23.biz.nf";
	$database = "2880668_alpinevr";
	$user = "2880668_alpinevr";
	$password = "Welcome@12";

	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	$email = $_POST['email'];
	$cpassword = $_POST['cpassword'];
	


   if($email=='email'&&$cpassword=='cpassword'){
  echo "successful";
   }
   else{
   echo "Login Failed";
   } 
	
	$inserted= mysqli_query($connection, $query);
	
	echo "Query ".$inserted;
?>