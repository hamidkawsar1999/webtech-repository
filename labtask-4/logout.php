<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:dashboard.php");
	
}

else{
	header("location:index.php");
}

 ?>