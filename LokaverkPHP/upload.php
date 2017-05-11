<?php
include "includes/dbcon.php";  
include "includes/session.php"; 

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$fileSize = $_FILES["fileToUpload"]["size"];
$fileSizeKb = $fileSize / 1024; 
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$Email = $_SESSION['email'];
$fileName = $_FILES["fileToUpload"]["name"];
$boom = explode(".", $fileName);
$fileExt = $boom[1];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
include_once"includes/Resize.php";
$target_file = "uploads/$fileName";
$resized_file = "uploads/resize/resize_$fileName";
$wmax = 200;
$hmax = 150;
ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);


$name = basename( $_FILES["fileToUpload"]["name"]);
//insert all info into database
if ($name != null) {
$sql = "INSERT INTO uploads (UserEmail, imgName, size)
VALUES (:email, :imgName ,:size)";

$q = $pdo->prepare($sql);


try{
		
		$q->bindValue('email',$Email);
		$q->bindValue('imgName',$name);
        $q->bindValue('size',$fileSizeKb);


		$q->execute();  
		echo "Það tókst að skrifa eftirfarandi upplýsingar í gagnagrunn<br>";
		echo "$name og $Email";
	}
	//
	catch (PDOException $ex){
		echo 'Það tókst ekki að skrifa í gagnagrunn: '.$ex->getMessage();
	}
  }
else {
header("location: admin.php");
}
header("location: admin.php");
?>


