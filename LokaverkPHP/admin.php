<?php 
include "includes/session.php"; 
include "includes/dbcon.php";
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
 $email = $_SESSION['email'];
 ?>
 <div class="main">  
    <div class="Login">
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" required>
    <input type="submit" value="Upload Image" name="submit">
  </form>
    </div>
  </div>
<?php 


try {
    $sql ="SELECT UserEmail , imgName, size FROM uploads WHERE UserEmail = '$email'";
    $query = $pdo->prepare($sql);
    $param = array($email);
    $query->execute($param);
    $res = $query->fetchAll();
} 
catch (Exception $e) {
    echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
}
$info = array($res);
$uploads = "uploads/";
$uploadsRe = "uploads/resize/resize_";

?>

<body>
  <div class="mainCon">
  <?php
    $arrlenght = count($res);
    for ($i=0; $i < $arrlenght; $i++) { 
      $pic = $info[0][$i]["imgName"];
      $size = $info[0][$i]["size"];
      echo '
      <div class="imgContainer">
      <p>Stærð '.$size.'Kb</p>
      <a target="_blank" href="'.$uploads.$pic.'">
      <img src='.$uploadsRe.$pic.'>
      </a>
      </div>
      ';
    }
  ?>
  </div>
</body>
</html>