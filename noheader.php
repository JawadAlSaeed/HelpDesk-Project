<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <link rel="stylesheet" type="text/css" href="../css/mainCSS.css">
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
    <header>

        <div>
            <i class="fas fa-hands-helping"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <ul>
                <li><a href="../Home.php">Home</a></li>
                <li><a href="../Requests.php">Requests</a></li>
                <li><a href="../Suggestions.php">Suggestions</a></li>
                <li><a href="../FAQ.php">FAQ</a></li>
                <li><a href="../About.php">About</a></li>
                <li style="float:right"><a class="active" href="login">Login</a></li>
            </ul>
        </div>
        <br>   
        <div>
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
            ?>

        </div>
    </header>
</body>

</html>

<?php 
require "footer.php";
 ?>