<?php
	$host = "fdb23.biz.nf";
	$database = "2880668_alpinevr";
	$user = "2880668_alpinevr";
	$password = "Welcome@12";

	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	
	$licenseplate = $_POST['licenseplate'];	
	
    
	


	$query = "Delete from tlbsuser wher Licensenumber = $licenseplate";
				
	
	
	
	$inserted= mysqli_query($connection, $query);
	
	if (mysqli_query($connection, $query)){
		
		
		
		echo " delete Sucess";
		
	}
	else
	{
		echo " upload failed";
	}
	
	echo "Query ".$inserted;
?>