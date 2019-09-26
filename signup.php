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
                <li><a class="active" href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
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
        </div>

        <main>
    <h1>Signup</h1>
    <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Fill in all of the fields.
                </div>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Invalid username and E-mail.
                </div>';
            }
            else if ($_GET['error'] == "invaliduid") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Invalid username.
                </div>';
            }
            else if ($_GET['error'] == "invalidmail") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Invalid E-mail.
                </div>';
            }
            else if ($_GET['error'] == "passwordcheck") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Your passwords do not match.
                </div>';
            }
            else if ($_GET['error'] == "usertaken") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Username is already taken.
                </div>';
            }
            else if ($_GET['error'] == "emailtaken") {
            echo '    <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    email is already taken.
                </div>';
            }
        }
        else if (isset($_GET['signup']) == "success") {
        echo '    <div class="isa_success">
                <i class="fa fa-check"></i>
                Sign up is successful!
            </div>';
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