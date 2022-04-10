
<?php
require 'auth.php';


echo $_SESSION['username'];

if(isset($_POST['logout'])){
	unset($_SESSION['username']);
	header("Location: login.php");
	exit();
}


?>