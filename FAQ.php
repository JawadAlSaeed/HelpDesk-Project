<?php 
    session_start();

    if (isset($_POST['search-submit'])) {

        $search = $_POST['search'];

        if (empty($search)){
            header("location: FAQ.php?error=emptyfields");
            exit();
        }
        else{
            $url = "FAQ.php";
            $html = file_get_contents($url);
            if (stristr($html, $search) !== false) {
                    echo "<script>
                    // var searched = '$search'; 
                    // window.alert(searched);
                    window.find('where');
                    </script>";
            } else {
              header("location: FAQ.php?error=nothingfound");
                exit();
            }
        }
    }
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
    <link href="css/search.css" rel="stylesheet" type="text/css" />
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
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br>
        <div class="faqErrors">
            <?php 
                require "tools/faqErrors.php";
            ?>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">FAQ</h1>
                <h3>search the FAQs or browse by category below</h3>
            </center>
        </div>
        <br>
        <div class="search-container">
            <form action="" method="post">
                <input style="border-radius: 4px;" placeholder="Search FAQs" type="text" name="search" id="search">
                <input type="submit" name="search-submit" id="submit" value="Send">
            </form>
        </div>
        <br>
        <br>
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
                <a href="#Security"><button class="btn"><i class="fas fa-shield-alt fa-5x"></i><br><br>Security</button></a>
                &nbsp;
                <a href="#Rights_and_roles"><button class="btn"><i class="far fa-hand-rock fa-5x"></i><br><br>Rights and Roles</button></a>
                &nbsp;
                <a href="#Desktop"><button class="btn"><i class="fas fa-desktop fa-5x"></i><br><br>Desktop</button></a>
                &nbsp;
                <a href="#HelpDesk"><button class="btn"><i class="fas fa-hands-helping fa-5x"></i><br><br>HelpDesk</button></a>
            </center>
        </div>
        <br>
        <hr>
        <br>
        <div class="container">
            <h2 id="Getting_started">Getting started</h2>
            <p>
                Q: Where can i get my own PC?
                <br>
                A: You can request a PC/Laptop in the request page.
            </p>
            <h2 id="Your_account">Your account</h2>
            <p>
                Q: How do I acquire an Email?
                <br>
                A: You can request an Email in the request tab. Also if you want mobile email access, you should mention that in the request.
            </p>
            <h2 id="General">General</h2>
            <p>
                Q: How do I connect to the printer?
                <br>
                A: Open wifi window on your PC and search for the name of the printer, click on it and type the password of the printer.
            </p>
            <h2 id="Network">Network</h2>
            <p>
                Q: How do I get wifi access?
                <br>
                A: You can use the universal wifi network in the company that is called JUC-WIFI, type, the password is the same password as the computer passoword.
            </p>
            <h2 id="Security">Security</h2>
            <p>
                Q: How do I change my PC account?
                <br>
                A: PC account can be changed in the windows acount settings.
            </p>
            <h2 id="Rights_and_roles">Rights and Roles</h2>
            <p>
                Q: How can I download programs.
                <br>
                A: You can ether request the right to download or simply ask the CCM manager to download it for you.
            </p>
            <h2 id="Desktop">Desktop</h2>
            <p>
                Q: How can I get my own share folder?
                <br>
                A: You can request a Sharefolder in the request page.
                <br><br>
                Q: Where is the location of the Sharefolder?
                <br>
                A: Sharefolder can be accessed in th homegroups.
            </p>
            <h2 id="HelpDesk">HelpDesk</h2>
            <p>
                Q: How do I request something
                <br>
                A: First you need to be logged in the website. Next, go to the request page and make a new request.
                <br><br>
                Q: how do I change my HelpDesk password?
                <br>
                A: Go to the Account page and click "Change Email/passoword" page, from there you can change you email and password.
                <br><br>
                Q: how do I delete my HelpDesk account?
                <br>
                A: Go to the Account page and click "Delete account" page, inside you'd need to type in your password to delete the account.
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
    require "tools/footer.php";
?>