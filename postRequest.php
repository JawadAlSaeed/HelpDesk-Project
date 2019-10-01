<?php 
    session_start();
?>
<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/mainCSS.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet" type="text/css" />
    <link href="css/infoMessages.css" rel="stylesheet" type="text/css" />
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
                require "..\_tools\loginErrors.php";
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
        <div class="postingReqeust">
            <?php
    		$name =  $_POST["name"];
    		$department =  $_POST["department"];
    		$priority =  $_POST["priority"];
    		$description =  $_POST["description"];

    		echo "<p><strong>name</strong>: $name<br>";
    		echo "<strong>department</strong>: $department<br>";
    		echo "<strong>priority</strong>: $priority <br>";
    		echo "<strong>description</strong>: $description<br>";

    		$DBConnect = mysqli_connect("localhost","root","");
    		if (!$DBConnect) 
    		{
    		    die('Could not connect: ' . mysqli_error());
    		}
    		$DBName = "requests";
    		mysqli_select_db($DBConnect,$DBName);
    		$QueryString = "INSERT INTO requeststables (name, dpartment, priority, description) VALUES ( '$name','$department','$priority','$description') ";
    		$QueryResult = mysqli_query($DBConnect,$QueryString)
    		     Or die("<p> Unable to execute query. </p>"
    		     . "<p> Error code  " .  mysqli_errno($DBConnect)
    		     .  ": " . mysqli_error($DBConnect)) . "</p>" ;
    		echo "<p>Data Successfully uploaded into the table. </p>";

    		mysqli_close($DBConnect);
    		 //-------------------------------------------------------------------------
    		?>
        </div>
        <br>
        <a href="home.html">return home</a>
        <a href="viewRequest.php">View Requests</a>
</body>

</html>

<?php 
require "footer.php";
?>