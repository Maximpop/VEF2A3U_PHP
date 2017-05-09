<?php 
include "includes/session.php";
session_destroy();
header("location: login.php");

?>