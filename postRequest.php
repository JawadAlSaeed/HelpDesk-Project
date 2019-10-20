<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="picture/help.ico" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="css/alerts.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a class="active" href="About.php">About</a></li>
                <li style="float:right">
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br>
        <div class="loginChecker">
            <?php 
                require "tools/loginChecker.php";
            ?>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Your request has been submited</h1>
                <br><br>
        </div>
        <br>
        <div class="container">
            <?php

            $uidUsers = $_SESSION['userUid'];
            $emailUsers = $_SESSION['userEmail'];
    		$telephone =  $_POST["telephone"];
    		$department =  $_POST["department"];
    		$priority =  $_POST["priority"];
    		$description =  $_POST["description"];

            if (empty($uidUsers) || empty($emailUsers) || empty($telephone) || empty($department) || empty($priority) || empty($description)){
                header("location: newRequests.php?error=emptyfields");
                exit();
            }
            else if (!preg_match("/^(966)([0-9]{9})$/", $telephone)) {
                header("location: newRequests.php?error=invaildtelephone");
                exit();
            }
            else if ($department == " ") {
                header("location: newRequests.php?error=invailddepartment");
                exit();
            }
            else if ($priority == " ") {
                header("location: newRequests.php?error=invaildpriority");
                exit();
            }

            date_default_timezone_set("Asia/Riyadh"); 
            $theDate = date("Y-m-d H:i:sa");

    		echo "<strong>Created by</strong>: $uidUsers<br>";
            echo "<strong>Email</strong>: $emailUsers<br>";
            echo "<strong>Phone number</strong>: $telephone<br>";
    		echo "<strong>Department</strong>: $department<br>";
    		echo "<strong>Priority</strong>: $priority<br>";
    		echo "<strong>Description</strong>: $description<br>";
            echo "<strong>Date created</strong>: $theDate<br>";

            //--------------------------------------------------------------------------
    		$DBConnect = mysqli_connect("localhost","root","");
    		if (!$DBConnect) 
    		{
    		    die('Could not connect: ' . mysqli_error());
    		}
    		$DBName = "helpdeskdb";
    		mysqli_select_db($DBConnect,$DBName);
    		$QueryString = "INSERT INTO requests (uidUsers, emailUsers, telephone, department, priority, description, date) VALUES ( '$uidUsers', '$emailUsers', '$telephone','$department','$priority','$description', '$theDate') ";
    		$QueryResult = mysqli_query($DBConnect,$QueryString)
    		     Or die("<p> Unable to execute query. </p>"
    		     . "<p> Error code  " .  mysqli_errno($DBConnect)
    		     .  ": " . mysqli_error($DBConnect)) . "</p>" ;

    		mysqli_close($DBConnect);
    		 //-------------------------------------------------------------------------
    		?>
        </div>
        <br>
        <div style="font-size: 24px;">
            <center>
                <a href="home.php"><button class="btn"><i class="fa fa-home fa-5x"></i><br><br>Return home</button></a>
                &nbsp;
                <a href="viewRequests.php"><button class="btn"><i class="fas fa-eye  fa-5x"></i><br><br>View Requests</button></a>
                &nbsp;
            </center>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>

<?php 
    require "tools/footer.php";
?>