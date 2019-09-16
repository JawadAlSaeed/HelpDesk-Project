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
    <link href="css/PhotoCSS.css" rel="stylesheet" type="text/css" />
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
                <li style="float:right"><div>   
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">logout</button>
                            </form>';
                        }
                        else{
                            echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input type="Password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                            <button href="signup.php">signup</button>
                            </form>';
                        }
                        ?></div>
                </li>
            </ul>
        </div>
        <br>
        <div>
            <center>
                <h1 style="font-size:50px">How can we help you today?</h1>
            </center>
        </div>
        <br>
        <div style="font-size: 24px;">
            <center>
                <a href="Requests.php"><button class="btn"><i class="fa fa-bars fa-5x"></i><br><br>Requests</button></a>
                &nbsp;
                <a href="Requests.php"><button class="btn"><i class="far fa-lightbulb fa-5x"></i><br><br>Suggestions</button></a>
                &nbsp;
                <a href="FAQ.php"><button class="btn"><i class="fas fa-question fa-5x"></i><br><br>FAQ</button></a>
            </center>
        </div>
    </div>
    <footer class="footer">
        <p>Designed by: Jawad Al-Saeed <br>
            Contact Me: <a href="mailto:JawadAlsaeed266@gmail.com"> Email</a></p>
        <br>
    </footer>
</body>

</html>