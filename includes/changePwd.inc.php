<?php 
    session_start();
?>

<?php 
if (isset($_POST['changeEmail-submit'])) {

	require 'dbh.inc.php';

	$username = $_SESSION['userUid'];
	$newmail = $_POST['new'];

	if (empty($newmail)){
		header("location: ../change.php?error=emptyfields");
		exit();
	}
	else{
		$sql = "UPDATE users SET emailUsers=? WHERE uidUsers =?;";

		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../change.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $newmail, $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			header("location: ../change.php?changeEmail=success");
			exit();
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else{
	header("location: ../change.php");
	exit();
}