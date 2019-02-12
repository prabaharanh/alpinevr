<?php
	$host = "fdb23.biz.nf";
	$database = "2880668_alpinevr";
	$user = "2880668_alpinevr";
	$password = "Welcome@12";

	
	$connection = mysqli_connect($host, $user, $password, $database);
	
	$email = $_POST['email'];
	$cpassword = $_POST['cpassword'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$dob = $_POST['dob'];
	$license = $_POST['license'];
	$doe = $_POST['doe'];
	$phone = $_POST['phone'];
	$street = $_POST['street'];
	$suburb = $_POST['suburb'];
	$city = $_POST['city'];
	$postal = $_POST['postal'];


	$query = "INSERT INTO tbluser VALUES('$email', '$cpassword', '$firstname', '$lastname', '$dob', '$license', '$doe', '$phone', '$street','$suburb', '$city', '$postal')";
	
	$inserted= mysqli_query($connection, $query);
	
	echo "Query ".$inserted;
?>