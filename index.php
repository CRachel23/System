<?php
	if(isset($_GET['Error']))
	{
		echo "<script>alert('Wrong Input')</script>";
	}
?>
<html>
	<head>
		<title>TEST</title>
	</head>
	<body>
	<h1>SYSTEM TESTING</h1>
	<div>
		<form action="authentication.php" method="post">
			Name: <input type="text" name="Name" placeholder="Username" required = "required"/><br>
			Password: <input type="password" name="Password" placeholder="Password" required = "required"/><br>
			<input type="submit" name="login" value="Submit"/>
		</form>
		<p> Not a member yet? <a href="addUser.html"> Join Now! </a></p>
		<p> Forgot your password? <a href="updateUser.php"> Click Here! </a></p>
		<p> Delete a user? <a href="deleteUser.php"> Click Here! </a></p>
	</div>
	</body>
</html>