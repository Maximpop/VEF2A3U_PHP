<!DOCTYPE html>
<?php include "includes/session.php"; ?>
<html>
  <head>
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
<h1>Login</h1>
<?php 
include "includes/nav.php";
if(isset($_SESSION['name'])){ echo 
  header("location: admin.php");
}
?>

  <div class="main">  
    <div class="Login">
      <form action="processLogin.php" method="post">
        <label>Email: </label>
        <input type="text" name="email" required ><br>

        <label>Password: </label>
        <input type="password" name="password" required ><br>

        <input type="submit">
      </form>
    </div>
  </div>

  <script type="text/javascript" src="JS/noSpaces.js"></script>
  </body>
</html>