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
                <li><a class="active" href="Requests.php">Requests</a></li>
                <li><a href="Suggestions.php">Suggestions</a></li>
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
                </li>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">What would you like to request?</h1>
            </center>
        </div>
        <br><br>
        
        <?php
        if (isset($_SESSION['userId'])) {
            echo '  <center>
                 <a href="requestSections\newRequests.php"><button class="btn"><i class="fas fa-plus fa-5x"></i><br><br>Make a new request</button></a>
                    &nbsp;
                    <a href="requestSections\viewRequests.php"><button class="btn"><i class="fas fa-eye fa-5x"></i><br><br>view requests</button></a>
                    &nbsp;
                </center>';
        }
        else{
            echo '  <div class="isa_error">
                        <i class="fa fa-times-circle"></i>
                        You need to login first
                    </div>';
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
 
</body>

</html>

<?php 
require "footer.php";
 ?>