<?php

	function createUser()
	{
		$conn = mysqli_connect("localhost", "root", "", "loginsystem");
		
		$newName = mysqli_real_escape_string($conn, $_POST['name']);
		$newPass = mysqli_real_escape_string($conn, $_POST['pass']);
		/* echo $newName.$newPass; */
		$query = "INSERT INTO login (Name, Password) VALUES ('$newName','$newPass')";
		$res = mysqli_query($conn, $query); 
		
		mysqli_close($conn);
		
		header ("location:index.php");
	}
	
	if (isset($_POST['create']))
	{
		createUser();
	}
?>
















