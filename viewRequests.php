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
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet" type="text/css" />
    <link href="css/infoMessages.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
    <link href="css/table.css" rel="stylesheet" type="text/css" />
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
            <a href="About.php"></a>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a class="active" href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
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
            <br><br>
        </div>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Your requests</h1>
            </center>
            <br><br>
        </div>
        <div class="container">
            <?php
                $uidUsers = $_SESSION['userUid'];
                //--------------------------------------------------------------------------
                $DBConnect = mysqli_connect("localhost","root","");
                if (!$DBConnect) 
                {
                    die('Could not connect: ' . mysqli_error());
                }
                $DBName = "helpdeskdb";
                mysqli_select_db($DBConnect,$DBName);
                $QueryString = "SELECT * FROM requests WHERE uidUsers = '$uidUsers'";
                $QueryResult = mysqli_query($DBConnect,$QueryString)
                     Or die("<p> Unable to execute query. </p>"
                     . "<p> Error code  " .  mysqli_errno($DBConnect)
                     .  ": " . mysqli_error($DBConnect)) . "</p>" ;
                //-------------------------------------------------------------------------
                echo "<center> <table class='tab'>";
                echo "<tr> <th>Requests ID</th> <th>Username</th> <th>Telephone</th> <th>Department</th> <th>priority</th> <th>description</th> <th>Date created</th> <th>state</th> </tr>";
                // keeps getting the next row until there are no more to get
                while($row = mysqli_fetch_array( $QueryResult )) {
                    echo "<tr> <td>"; 
                    echo $row['requestID'];
                    echo "</td><td>"; 
                    echo $row['uidUsers'];
                    echo "</td><td>"; 
                    echo $row['telephone'];
                    echo "</td><td>"; 
                    echo $row['dpartment'];        
                    echo "</td><td>"; 
                    echo $row['priority'];
                    echo "</td><td>"; 
                    echo $row['description'];
                    echo "</td><td>";
                    echo $row['date'];
                    echo "</td><td>";  
                    echo $row['state'];
                    echo "</td></tr>";
                } 
                echo "</table></center>";
                mysqli_close($DBConnect);
            ?> 
        </div>
    </div>
</body>

</html>

<?php 
    require "footer.php";
?>