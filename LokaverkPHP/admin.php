<?php 
include "includes/session.php"; 
include "includes/dbcon.php";
?>
<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
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
      <img src='.$uploadsRe.$pic.' class="thumb">
      <img src="'.$uploads.$pic.'" class="fullImg">      
      </div>
      ';
    }
  ?>
  </div>
</body>
<script type="text/javascript">
  var hide = false;
  $(".thumb").each(function(index, el) {
    $(el).on('click', function(event) {
      $(".showImg").removeClass('showImg').hide();
      var thing = $(this).siblings('.fullImg').addClass('showImg').show();
      console.log(thing);
      hide = true;
    });
  });
  $(".fullImg").on('click', function(event) {
    if (hide == true) {
       console.log("goner");
       $(".showImg").removeClass('showImg').hide();
       hide = false;
    }
  });
  $(".fullImg").each(function(index, el) {
    $(this).hide();
  });
</script>
</html>