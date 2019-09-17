<?php 

if (isset($_POST['login-submit'])) {
	
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		header("location: ../home.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * from users where uidUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../home.php?error=sqlerror");
			exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result) ) {
				$pwdCheck = password_verify($password, $row['pwdUsers']);
				if ($pwdCheck == false) {
					header("location: ../home.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					session_start();
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['userUid'] = $row['uidUsers'];
					$_SESSION['userEmail'] = $row['emailUsers'];

					header("location: ../home.php?login=success");
					exit();
				}
				else {
					header("location: ../home.php?error=wrongpwd");
					exit();
				}

			}
			else{
				header("location: ../home.php?error=");
				exit();
			}
		}
	}
}
else{
	header("location: ../home.php");
	exit();
}