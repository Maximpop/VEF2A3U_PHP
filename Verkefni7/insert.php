<meta charset="UTF-8"> 

<?php
include "dbcon.php";  

$name = $_POST['name']; 	
$email = $_POST['email'];
$password = $_POST['password']; 	 		

//er hérna að athuga hvort breyturnar séu ekki tómar
if(!empty($name) && !empty($email) && !empty($password)) 
{

	$sql = 'INSERT INTO User(Name, Email, Password)VALUES(:name,:email,:password)'; 
	
	$q = $pdo->prepare($sql);

	try{
		
		$q->bindValue(':name',$name); 
		$q->bindValue('email',$email);
		$q->bindValue('password',$password);

		$q->execute();  
		echo "Það tókst að skrifa eftirfarandi upplýsingar í gagnagrunn<br>";
		echo "$name og $email";
	}
	//
	catch (PDOException $ex){
		echo 'Það tókst ekki að skrifa í gagnagrunn: '.$ex->getMessage();
	}

}
?>