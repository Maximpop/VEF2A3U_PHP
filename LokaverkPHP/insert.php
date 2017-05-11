<meta charset="UTF-8"> 
<?php
include "includes/dbcon.php";  
include "includes/session.php"; 
$name = $_POST['name']; 	
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = md5($password); 	 		
$salt = uniqid(mt_rand(), true);
if(!empty($name) && !empty($email) && !empty($password)) 
{

	$hash = hash("sha512", $password . $salt);

	$sql = 'INSERT INTO User(Name, Email, Password, salt)VALUES(:name,:email,:password,:salt)'; 
	
	$q = $pdo->prepare($sql);

	try{
		
		$q->bindValue(':name',$name); 
		$q->bindValue('email',$email);
		$q->bindValue('password',$hash);
		$q->bindValue('salt',$salt);


		$q->execute();  
		echo "Það tókst að skrifa eftirfarandi upplýsingar í gagnagrunn<br>";
		echo "$name og $email";
	}
	//
	catch (PDOException $ex){
		echo 'Það tókst ekki að skrifa í gagnagrunn: '.$ex->getMessage();
	}

}
header("location: login.php")
?>