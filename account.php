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
                <li>
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Account</h1>
            <br><br>
        </div>
        <br>
        <div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '  
                        <center>
                            <a href="change.php"><button class="btn"><i class="fas fa-plus fa-5x"></i><br><br>Change Email/Password</button></a>
                            &nbsp;
                            <a href="viewRequests.php"><button class="btn"><i class="fas fa-eye fa-5x"></i><br><br>view requests</button></a>
                            &nbsp;
                        </center>
                    ';
                }
                else{
                    echo '  
                        <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            You need to login first
                        </div>
                    ';
                }
                ?>
        </div>
    </div>
    <br>
    <br>
    <br>
</body>

</html>

<?php 
    require "tools/footer.php";
?>