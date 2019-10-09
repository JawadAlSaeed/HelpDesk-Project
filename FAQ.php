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
                <li><a class="active" href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <div>
                        <?php
                            require "tools/session.php"; 
                        ?>
                    </div>
                </li>
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
        <div class="search-container">
            <center>
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </center>
        </div>
        <br><br>
        <div class="tabs">
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
                <a href="#other"><button class="btn"><i class="fas fa-ellipsis-h fa-5x"></i><br><br>Other</button></a>
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
            <h2 id="Your_account">Your account</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="General">General</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="Network">Network</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="Database">Database</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="Rights_and_roles">Rights and Roles</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="Desktop">Desktop</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
            <h2 id="other">other</h2>
            <p>
                Q: where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request tab.
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>

<?php 
    require "footer.php";
?>