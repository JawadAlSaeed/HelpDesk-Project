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
                                    <a class="active" style="float: right" href="signup.php">Signup</a>
                                </div>
                            ';
                        }
                        ?>
                    </div>
            </ul>
        </div>
        <div class="subTitle">
            <center>
                <h1 class="subTitle" style="font-size:45px">Signup</h1>
            </center>
        </div>
        <dir class="signupErrors">
            <?php 
                require "_tools\loginErrors.php";
            ?>
        </dir>
        <div class="container">
            <form action="includes/signup.inc.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="username">Username</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="uid" placeholder="Username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="mail" placeholder="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="Password">Password</label>
                    </div>
                    <div class="col-75">
                       <input type="password" name="pwd" placeholder="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pwd-repeat">repeat password</label>
                    </div>
                    <div class="col-75">
                       <input type="password" name="pwd-repeat" placeholder="repeat password">
                    </div>
                </div>
                <div class="row">
                    <button class="signupBtn" type="submit" name="signup-submit">Signup</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php 
    require "footer.php";
?>