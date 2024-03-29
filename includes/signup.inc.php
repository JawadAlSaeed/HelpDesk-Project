<?php 
if (isset($_POST['signup-submit'])) {

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$password = $_POST['pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);

	if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
		header("location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("location: ../signup.php?error=invaildmailuid");
		exit();
	}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("location: ../signup.php?error=invaildmail&uid=".$username);
		exit();
	}
	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("location: ../signup.php?error=invailduid&mail=".$email);
		exit();
	}
	else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
  		header("location: ../signup.php?error=weakpassword");
		exit();
	}
	else if ($password !== $passwordRepeat) {
		header("location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}
	else{

		$sql = "SELECT uidUsers from users where uidUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			$sql = "SELECT uidUsers from users where emailUsers=?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../signup.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $email);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					header("location: ../signup.php?error=emailtaken&uid=".$username);
					exit();
				}
				else{
					$sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?);";
					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("location: ../signup.php?error=sqlerror");
						exit();
					}
					else{
						$hachedPwd = password_hash($password, PASSWORD_DEFAULT);

						mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hachedPwd);
						mysqli_stmt_execute($stmt);
						header("location: ../home.php?signup=success");
						exit();
					}
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else{
	header("location: ../signup.php");
	exit();
}