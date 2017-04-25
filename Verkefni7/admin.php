<html>
<head>
	<title>hello</title>
</head>
<?php 
	session_start();
	if (!isset($_SESSION["name"])) {
	header("location: ");
	}

 ?>
<body>
<p>Welcome</p>
</body>
</html>