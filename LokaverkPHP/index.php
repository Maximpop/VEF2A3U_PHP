<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Verkefni7</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>
<body>
	<?php
	include "includes/nav.php";
	?>
	<div class="main">	
		<div class="SignUp">
			<form action="insert.php" method="post">
				<label>Name: </label>
				<input type="text" name="name" required ><br>
				
				<label>Email: </label>
				<input type="text" name="email" required ><br>

				<label>Password: </label>
				<input type="password" name="password" required ><br>

				<input type="submit">
			</form>
		</div>
	</div>	
</body>
</html>