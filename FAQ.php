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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content">
        <div>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <a href="About.php"></a>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a href="Suggestions.php">Suggestions</a></li>
                <li><a class="active" href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <div>   
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">logout</button>
                            </form>';
                        }
                        else{
                            echo '
                                <div style="float: left">
                                    <form action="includes/login.inc.php" method="post">
                                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                    <input type="Password" name="pwd" placeholder="Password">
                                    <button id="log" type="submit" name="login-submit">Login</button>
                                    </form>
                                </div>
                                <div style="float: right">
                                    <a style="float: right" href="signup.php">Signup</a>
                                </div>';
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <br>
        <div>
            <center>
                <h1 style="font-size:50px">FAQ</h1>
                <h3>search the FAQs or browse by category below</h3>
                <br>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </center>
        </div>
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
                <a href="#Database"><button class="btn"><i class="fas fa-database fa-5x"></i><br><br>Database</button></a>
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
        <div>
            <h2 id="Getting_started">Getting started</h2>
            <p>
                Q:where can i get my own PC?
                <br>
                A: You can request a PC/Laptop using the Request tap or by coming to the Support team.
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