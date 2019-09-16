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
                <li><a href="Suggestions.php">Suggestions</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a class="active" href="About.php">About</a></li>
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
                            </form>
                             <a href="signup.php">signup</a>';
                        }
                        ?></div>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <footer class="footer">
        <p>Designed by: Jawad Al-Saeed <br>
            Contact Me: <a href="mailto:JawadAlsaeed266@gmail.com"> Email</a></p>
        <br>
    </footer>
</body>

</html>