<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/mainCSS.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <ul>
                <li><a class="active" href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
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
            </ul>
        </div>

        <main>
    <h1>Signup</h1>
    <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p class="errors">Fill in all of the fields</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
                echo '<p class="errors">Invalid username and E-mail!</p>';
            }
            else if ($_GET['error'] == "invaliduid") {
                echo '<p class="errors">Invalid username</p>';
            }
            else if ($_GET['error'] == "invalidmail") {
                echo '<p class="errors">Invalid E-mail</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="errors">Your passwords do not match</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p class="errors">Username is already taken</p>';
            }
        }
        else if (isset($_GET['signup']) == "success") {
            echo '<p>Sign up is successful</p>';
        }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwd-repeat" placeholder="repeat password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
    </main>

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