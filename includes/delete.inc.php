<?php 
    session_start();
?>

<?php 
if (isset($_POST['delete-submit'])) {

	require 'dbh.inc.php';

	$username = $_SESSION['userUid'];
	$Password = $_POST['pwd'];

	if (empty($Password)){
		header("location: ../delete.php?error=emptyfields");
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
				$pwdCheck = password_verify($Password, $row['pwdUsers']);
				if ($pwdCheck == false) {
					header("location: ../delete.php?error=wrongpwd");
					exit();
				}
				else if ($pwdCheck == true) {
					$sql = "DELETE FROM users WHERE uidUsers=?;";

					$stmt = mysqli_stmt_init($conn);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						header("location: ../delete.php?error=sqlerror");
						exit();
					}
					else{

						mysqli_stmt_bind_param($stmt, "s", $username);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						require "logout.inc.php";
						header("location: ../home.php?accountdeleted=success");
						exit();
					}
				}
				else {
					header("location: ../delete.php?error=wrongpwd");
					exit();
				}

			}
		}
	}
}
else{
	header("location: ../home.php");
	exit();
}