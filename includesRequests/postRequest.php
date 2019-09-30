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
                require "tools\loginErrors.php";
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
                <h1 style="font-size:45px">Request submited</h1>
                <br><br>
        </div>
        
        <hr>
        <?php
			$EMPLOYEE_ID =  $_POST["EMPLOYEE_ID"];
			$FIRST_NAME =  $_POST["FIRST_NAME"];
			$LAST_NAME =  $_POST["LAST_NAME"];
			$HIRE_DATE =  $_POST["HIRE_DATE"];
			$SALARY =  $_POST["SALARY"];
			$JOB_ID =  $_POST["JOB_ID"];
			$DEPARTMENT_ID =  $_POST["DEPARTMENT_ID"];
			$PostMessage = addslashes("$EMPLOYEE_ID|$FIRST_NAME|$LAST_NAME|$HIRE_DATE|$SALARY|$JOB_ID|$DEPARTMENT_ID\n");
			$MessageStore = fopen("employee.txt", "a");
			fwrite($MessageStore, "$PostMessage");
			fclose($MessageStore);

		echo "<p><strong>EMPLOYEE_ID</strong>: $EMPLOYEE_ID<br />";
		echo "<strong>FIRST_NAME</strong>: $FIRST_NAME<br />";
		echo "<strong>LAST_NAME</strong>: $LAST_NAME <br />";
		echo "<strong>HIRE_DATE</strong>: $HIRE_DATE<br />";
		echo "<strong>SALARY</strong>: $SALARY<br />";
		echo "<strong>JOB_ID</strong>: $JOB_ID<br />";
		echo "<strong>DEPARTMENT_ID</strong>: $DEPARTMENT_ID</p>";
		//-------------------------------------------------------------------------
		$DBConnect = mysqli_connect("localhost","root","");
		if (!$DBConnect) 
		{
		    die('Could not connect: ' . mysqli_error());
		}
		$DBName = "shipping";
		mysqli_select_db($DBConnect,$DBName);
		$QueryString = "INSERT INTO employees VALUES ( '$EMPLOYEE_ID','$FIRST_NAME','$LAST_NAME','$HIRE_DATE','$SALARY','$JOB_ID', '$DEPARTMENT_ID' ) ";
		$QueryResult = mysqli_query($DBConnect,$QueryString)
		     Or die("<p> Unable to execute query. </p>"
		     . "<p> Error code  " .  mysqli_errno($DBConnect)
		     .  ": " . mysqli_error($DBConnect)) . "</p>" ;
		echo "<p>Data Successfully uploaded into the table. </p>";

		mysqli_close($DBConnect);
		 //-------------------------------------------------------------------------
		?>
        </form>
        <hr />
        <p><a href="employees.html">Post Another Employee</a>
            <a href="ViewEmployees.php">View Employee</a></p>
</body>

</html>
<?php 
require "footer.php";
 ?>