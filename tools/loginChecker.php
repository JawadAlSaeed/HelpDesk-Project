<?php 
	if (!isset($_SESSION['userId'])) {
		header("location: home.php?error=notloggedin");
		exit();
	}
?>