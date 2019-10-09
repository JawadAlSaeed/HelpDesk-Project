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
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <!-- <link href="css/input.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/alerts.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
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
                            require "_tools/session.php"; 
                        ?>
                    </div>
            </ul>
        </div>
        <div class="subTitle">
            <center>
                <h1 class="subTitle" style="font-size:45px">Signup</h1>
            </center>
        </div>
        <div class="loginErrors">
            <br>
            <br>
            <?php 
                require "_tools\loginErrors.php";
            ?>
        </div>
        <div class="container">
                <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username"> 
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <input type="Password" name="pwd" placeholder="Password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    <button id="log" type="submit" name="login-submit">Login</button>
                </form>
            </form>
        </div>
    </div>
</body>

</html>

<?php 
    require "footer.php";
?>