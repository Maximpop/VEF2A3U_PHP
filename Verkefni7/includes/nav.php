<ul>
<li  class="nav"><a href="index.php">Main</a> </li>

<li  class="nav"><a href="login.php">Login</a>  </li>
<?php 
if(isset($_SESSION['name'])){ echo 
"<li  class='nav'><a href='admin.php'>Admin</a>  </li>";
}
?>
<li class="nav"><a href="logout.php">Logout</a> </li>
</ul>