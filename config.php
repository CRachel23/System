<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "loginsystem";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
	
	if($conn == false)
	{
		die("Failed to connect MySQL".mysqli_connect_error());
	}
?>