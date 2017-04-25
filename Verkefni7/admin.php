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
      <form action="ChangeName.php" method="post">
        <label>Change name to: </label>
        <input type="text" name="NewName" required ><br>
        <input type="submit">
      </form>
    </div>
  </div>
<body>
<p>Welcome</p>
</body>
</html>