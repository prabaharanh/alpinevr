<?php
	$host = "fdb23.biz.nf";
	$database = "2880668_alpinevr";
	$user = "2880668_alpinevr";
	$password = "Welcome@12";

	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	$searchtype = $_POST['searchtype'];
	$searchmodel = $_POST['searchmodel'];
	$searchmake = $_POST['searchmake'];
	
	$query = "Select make, model, Type, cost from tblVehicle where type like '%$searchtype%' and model like '%$searchmodel%' and make like '%$searchmake%'";
	
	$result= mysqli_query($connection, $query);
	
	//echo "[";
	
	//while ($row = mysqli_fetch_assoc($result)){
	//	echo json_encode($row);
	//	echo ",";
    
    //}
	//echo "]";
	
	$list = mysqli_query($connection, $query);
	$dataset = array();
	
	while ($row = mysqli_fetch_assoc($result)){
		//echo json_encode($row);
		//echo ",";
		array_push($dataset, $row);
    }
	
	echo json_encode($dataset);

?>