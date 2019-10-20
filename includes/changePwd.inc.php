<?php 
    session_start();
?>

<?php 
if (isset($_POST['changePwd-submit'])) {

	require 'dbh.inc.php';

	$username = $_SESSION['userUid'];
	$oldPassword = $_POST['old-pwd'];
	$newPassword = $_POST['new-pwd'];
	$passwordRepeat = $_POST['pwd-repeat'];

	if (empty($username) || empty($oldPassword) || empty($newPassword) || empty($passwordRepeat)){
		header("location: ../change.php?error=emptyfields");
		exit();
	}
	else if ($newPassword !== $passwordRepeat) {
		header("location: ../change.php?error=passwordcheck");
		exit();
	}
	else {
		$sql = "SELECT * from users where uidUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../change.php?error=sqlerror");
			exit();
		}
		else{

			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result) ) {
				$pwdCheck = password_verify($oldPassword, $row['pwdUsers']);
				if ($pwdCheck == false) {
					header("location: ../change.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					$sql = "UPDATE users SET pwdUsers=? WHERE uidUsers =?;";

					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("location: ../change.php?error=sqlerror");
						exit();
					}
					else{
						$hachedPwd = password_hash($newPassword, PASSWORD_DEFAULT);

						mysqli_stmt_bind_param($stmt, "ss", $hachedPwd, $username);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						header("location: ../change.php?changePwd=success");
						exit();
					}
				}
				else {
					header("location: ../change.php?error=wrongpwd");
					exit();
				}

			}
		}
	}
}
else{
	header("location: ../change.php");
	exit();
}