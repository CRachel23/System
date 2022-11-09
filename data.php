<?php 
	include ("config.php"); 
?>
 <html>
	<head>
	<h1>USER DATA</h1><br>
	</head>
	<body>
		<div>
		<form action="data.php" method="post" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="nama" placeholder="nama peserta">
		<br>
		<label>IC</label>
		<input type="text" name="ic" placeholder="020202125677">
		<br>
		<!-- <<label>Upload File</label><br>
		<input type="file" name="upload" placeholder="file">  -->
		<br>
		<label>Education</label><br>
		<select name="EducationLevel">
        <option value="1">SPM</option>
		<option value="2">Diploma</option>
		<option value="3">Degree</option>
		</select>
		<br>
		<br>
		<button type="submit" name="add">Submit</button>
		</form>
		</div>
	<?php
		if (isset($_POST['add'])) 
		{
			$Name = $_POST['nama'];
			$IC = $_POST['ic'];
			$Education = $_POST['EducationLevel'];
			//$Document = $_FILES['upload'];
			//echo $Name.$IC.$Education;
			$add = "INSERT INTO data VALUES ('$Name', '$IC', '$Education')";
			mysqli_query($conn, $add); 
		}
	?>
</body>
</html>