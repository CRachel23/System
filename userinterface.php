<?php
	include ("config.php");
?>
<html lang="en" dir="ltr">
	<head>
		<style>
		body 
		{
		background-color: lightblue;
		}
		</style>
		<meta charset="utf-8">
		<title>Main Page</title>
		<h1>User Interface</h1>
	</head>
	<body>
	  <div class="w3-black w3-center">
		<a href="Userinterface.php" class="w3-bar-item w3-button">Home</a> 
		<a href="data.php?q=1" class="w3-bar-item w3-button">Data</a> 
		<a href="index.php?q=1" class="w3-bar-item w3-button">Logout</a> 
	  </div>
	  <div>
			<?php
				$conn = mysqli_connect($host, $user, $pass, $db);
				$query = "SELECT * FROM data";
				$res = mysqli_query($conn, $query);
			?>
				<table>
						<tr>
						<th>Name</th>
						<th>IC</th>
						<th>Education</th>
						<th>Document</th>
						</tr>
						<?php
						while($row=mysqli_fetch_array($res))
						{
						echo "<tr>";
							echo "<td>".$row['Name']."</td>";
							echo "<td>".$row['IC']."</td>";
							echo "<td>".$row['Education']."</td>";
							echo "<td>".$row['Document']."</td>";
						echo "</tr>";
						}
						?>
				</table>
	</body>
</html>