<?php 
    session_start();
?>

<?php 
if (isset($_POST['search-submit'])) {

	$search = $_POST['search'];

	if (empty($search)){
		header("location: ../faq.php?error=emptyfields");
		exit();
	}
	else{
		$url = "../FAQ.php";
		$html = file_get_contents($url);
		if (stristr($html, $search) !== false) {
				header("location: ../faq.php");
				echo "<script>
        		var string = '<?php echo $search; ?>'; 
            	window.find(string);
        		}</script>";
		} else {
		  header("location: ../faq.php?error=nothingfound");
			exit();
		}
	}
}