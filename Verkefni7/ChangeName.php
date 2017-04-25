<?php
include "includes/dbcon.php";
include "includes/session.php";
$NewName = $_POST['NewName'];
$email = $_SESSION['email'];
try {
    $sql = "UPDATE user set Name = '$NewName' WHERE Email = '$email'";
    $query = $pdo->prepare($sql);
    $query ->execute();
} catch (Exception $e) {
    echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
}
header("location: logout.php");
?>