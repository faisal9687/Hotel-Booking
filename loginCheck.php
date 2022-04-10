<?php

require 'database/dbr.php';

session_start();

if(isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$sql = "select * from users where Username = '$username' && Password = '$password'";
	
	if(mysqli_num_rows(mysqli_query($con, $sql)) > 0){
		
		$_SESSION['username'] = $username;
		
		header("Location: home.php");
	} else {
		echo  "<p> Wrong username or password!!</p>";
	}
	
	
}
?>