<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/mainCSS.css" rel="stylesheet" type="text/css" />
    <link href="css/PhotoCSS.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
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
                <li><a class="active" href="Suggestions.php">Suggestions</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
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
                <h1 style="font-size:50px">help us improve the improve the company</h1>
            </center>
        </div>
        <br><br>
        <form method="post" name="myemailform" action="form-to-email.php">
            <center>
                Enter Name: <input placeholder="Jawad Al-Saeed" type="text" name="name">
                <br><br>
                Enter Email Address: <input class="suggestion" placeholder="Example@example.com" type="text" name="email">
                <br><br>
                Your Suggestion: <textarea placeholder="Remember, be nice!" cols="30" rows="5" name="message"></textarea>
                <br><br>
                <input type="submit" value="Send Form">
            </center>
        </form>
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