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
    <link href="css/alerts.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
            <!-- <img style=" max-width:13%; max-height:13%;" src="picture/juc.png" alt="JUC"> -->
        </div>
        <div class="header">
            <ul>
                <li><a class="active" href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br>
        <div class="homeErrors">
            <?php 
                require "tools/homeErrors.php";
            ?>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 class="subTitle" style="font-size:45px">How can we help you today?</h1>
            </center>
        </div>
        <br><br>
        <div class="tabs">
            <center>
                <a href="Requests.php"><button class="btn"><i class="fa fa-bars fa-5x"></i><br><br>Requests</button></a>
                &nbsp;
                <a href="contactUs.php"><button class="btn"><i class="far fa-lightbulb fa-5x"></i><br><br>Contact us</button></a>
                &nbsp;
                <a href="FAQ.php"><button class="btn"><i class="fas fa-question fa-5x"></i><br><br>FAQ</button></a>
            </center>
        </div>
    </div>
    <br>
    <br>
</body>

</html>

<?php 
    require "tools/footer.php";
?>