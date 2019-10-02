<?php 
    session_start();
?>
<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="picture/help.ico" />
    <link href="css/mainCSS.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet" type="text/css" />
    <link href="css/infoMessages.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="loginErrors">
            <br>
            <br>
            <?php 
                require "_tools\loginErrors.php";
            ?>
        </div>
        <div class="header">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a class="active" href="About.php">About</a></li>
                <li style="float:right">
                    <div>
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<div class="aligner">';
                            
                            echo '<form action="includes/logout.inc.php" method="post">
                            <div style="float: right; padding-bottom: 10px;">
                                <button id="log" type="submit" name="logout-submit">logout</button>
                            </div>
                            </form>';
                            echo "<article> Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</article>";
                            echo '</div>';
                        }
                        else{
                            echo '
                                <div style="float: left">
                                    <form action="includes/login.inc.php" method="post">
                                    <div class="group">
                                    <input type="text" name="mailuid" placeholder="Username"> 
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <input type="Password" name="pwd" placeholder="Password">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    </div>
                                    <button id="log" type="submit" name="login-submit">Login</button>
                                    </form>
                                </div>
                                <div style="float: right">
                                    <a style="float: right" href="signup.php">Signup</a>
                                </div>
                            ';
                        }
                        ?>
                    </div>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Your request has been submited</h1>
                <br><br>
        </div>
        <br>
        <div class="container">
            <?php

            uidUser = $_SESSION['userUid'];
    		$telephone =  $_POST["telephone"];
    		$department =  $_POST["department"];
    		$priority =  $_POST["priority"];
    		$description =  $_POST["description"];

            date_default_timezone_set("Asia/Riyadh"); 
            $theDate = date("Y-m-d h:i:sa");

    		echo "<strong>Created by</strong>: $uidUser<br>";
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
    		$QueryString = "INSERT INTO requests (name, dpartment, priority, description, date) VALUES ( '$name','$department','$priority','$description', '$theDate') ";
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
</body>

</html>

<?php 
    require "footer.php";
?>