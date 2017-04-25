<meta charset="UTF-8">

<?php
include "includes/dbcon.php";
include "includes/session.php";

$email = $_POST["email"];
$pass = $_POST["password"];
$result = "ok";

try {
    $sql ="SELECT Name , Password FROM user WHERE Email = :email";
    $query = $pdo->prepare($sql);
    $param = array(':email' => $email);
    $query->execute($param);
    $res = $query->fetch();
} catch (Exception $e) {
    echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
}
$info = array($res);
if ($info[0]['Password'] == $pass) {
	echo "Winning";
	$_SESSION['name'] = $info[0]['Name'];
	$_SESSION['email'] = $email;
	header("location: admin.php");
}
else{
	echo "Notendanafn eða lykilorð ekki rétt";
}
	



?>