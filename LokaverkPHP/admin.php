<?php 
include "includes/session.php"; 
?>

<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>
<?php 
include "includes/nav.php";
?>
<?php 
	if(!isset($_SESSION['name'])){
	header("location: login.php");
	}
 ?>
 <div class="main">  
    <div class="Login">
      
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
    </div>
  </div>
<body>
<p>Welcome</p>
</body>
</html>