<?php
	$host = "fdb23.biz.nf";
	$database = "2880668_alpinevr";
	$user = "2880668_alpinevr";
	$password = "Welcome@12";

	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	$make = $_POST['make'];
	$model = $_POST['model'];
	$ctype = $_POST['ctype'];
	$licenseplate = $_POST['licenseplate'];	
	$odometer = $_POST['odometer'];
	$available =$_POST['available'];
	$cost=$_POST['cost'];
	$availablefrom =$_POST['availablefrom'];
	$availableto =$_POST['availableto'];
	$imagepath =$_FILES['imgupload']['name'];
	//file_get_contents($_FILES['imageVehi']['tmp_name']);
    
	


	$query = "UPDATE tblvehicle SET make = '$make', model= '$model', Type = '$ctype', Odometer ='$odometer',  available= '$available', cost='$cost', availablefrom= '$availablefrom', availableto= '$availableto', imgname = '$imagepath' where licenseplate= '$licenseplate'";
				
	
	
	
	$inserted= mysqli_query($connection, $query);
	
	if (mysqli_query($connection, $query)){
		
		move_uploaded_file($_FILES['imgupload']['tmp_name'], "alpine/vehicleimages/$imagepath");
		
		echo " upload Sucess";
		
	}
	else
	{
		echo " upload failed";
	}
	
	echo "Query ".$inserted;
?>