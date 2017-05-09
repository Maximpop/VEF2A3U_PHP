<?php

try{


	$source = 'mysql:host=tsuts.tskoli.is;dbname=2301983069_verkefni7php';  
	
	$user = '2301983069';
	
	$password = 'mypassword';


	$pdo = new PDO($source, $user, $password);

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e){
	
	echo "tenging tókst ekki". "<br>" . $e->getMessage();
	
}
?>