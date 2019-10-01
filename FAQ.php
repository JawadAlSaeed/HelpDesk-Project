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
                <li><a class="active" href="FAQ.php">FAQ</a></li>
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
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">FAQ</h1>
                <h3>search the FAQs or browse by category below</h3>
            </center>
        </div>
        <br><br>
        
        <center>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </center>
        <br>
        <br>
        <div style="font-size: 24px;">
            <center>
                <a href="#Getting_started"><button class="btn"><i class="far fa-play-circle fa-5x"></i><br><br>Getting started</button></a>
                &nbsp;
                <a href="#Your_account"><button class="btn"><i class="far fa-user-circle fa-5x"></i><br><br>Your account</button></a>
                &nbsp;
                <a href="#General"><button class="btn"><i class="fas fa-archive fa-5x"></i><br><br>General</button></a>
                &nbsp;
                <a href="#Network"><button class="btn"><i class="fas fa-network-wired fa-5x"></i><br><br>Network</button></a>
                <br>
                <br>
                <a href="#Database"><button class="btn"><i class="fas fa-wifi fa-5x"></i><br><br>Internet</button></a>
                &nbsp;
                <a href="#Rights_and_roles"><button class="btn"><i class="far fa-hand-rock fa-5x"></i><br><br>Rights and Roles</button></a>
                &nbsp;
                <a href="#Desktop"><button class="btn"><i class="fas fa-desktop fa-5x"></i><br><br>Desktop</button></a>
                &nbsp;
                <a href="#desktop"><button class="btn"><i class="fas fa-ellipsis-h fa-5x"></i><br><br>Other</button></a>
            </center>
        </div>
        <br>
        <hr>
        <br>
        <div class="container">
            <h2 id="Getting_started">Getting started</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
        </div>
        <br>
        <br>
        <br>
    </div>

</body>

</html>

<?php 
require "footer.php";
 ?>