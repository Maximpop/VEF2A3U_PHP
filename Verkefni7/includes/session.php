<?php
session_start();
if(isset($_SESSION['name']))
{
	Echo  $_SESSION['name'];
	echo '</br>';
	echo  $_SESSION['email'];
}
echo '<link rel="stylesheet" type="text/css" href="css/main.css">'
 ?>