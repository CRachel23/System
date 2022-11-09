<?php

	function login()
	{
		$conn = mysqli_connect("localhost", "root", "", "loginsystem");
		
		$name = stripcslashes($_POST ['Name']); 
		$pass = stripcslashes($_POST ['Password']);
		$name = mysqli_real_escape_string($conn, $_POST['Name']);
		$pass = mysqli_real_escape_string($conn, $_POST['Password']);
		/* echo $name.$pass; */
		$query = "SELECT Name, Password From login WHERE Name ='$name' AND Password ='$pass'";
		$res =mysqli_query($conn, $query);
		
		if(mysqli_num_rows($res) == 1)
		{
			$_SESSION ['Name'] = $name;
			mysqli_close($conn);
			header("location:userinterface.php"); 
		}
		else
		{	
			mysqli_close($conn);
			header("location:index.php?Error=123");
		}
	}
	
	if (isset($_POST['login']))
	{
		login();
	}
?>	