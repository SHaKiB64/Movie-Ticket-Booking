<?php 
	session_start();

	// Unset all session variables
	$_SESSION = array();

	// Clear the cookies
	setcookie("email", "", time() - 3600, "/");
	setcookie("password", "", time() - 3600, "/");

	// Destroy the session
	session_destroy();
	
	// Redirect to the login page
	header("Location:../../Home.php");
	exit();
?>
