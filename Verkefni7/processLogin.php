<meta charset="UTF-8">

<?php
include "dbcon.php"; 

$email = $_POST["email"];
$pass = $_POST["password"]; 
echo $email;
echo $pass;
echo "Hello";
try {
echo "Hello2";
$sql ='SELECT Name, Password FROM user WHERE Email = "' + $email + '"';
$result = $pdo->query($sql);
} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
}
if ($result['Password'] == $pass) {
	session_start();

	$_SESSION['name'] = $name;

	header("location: admin.php");
	}
?>
