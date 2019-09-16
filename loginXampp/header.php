<?php 
    session_start();
 ?>

<!DOCTYPE html>
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
                <li><a href="../Home.html">Home</a></li>
                <li><a href="../Requests.html">Requests</a></li>
                <li><a href="../Suggestions.html">Suggestions</a></li>
                <li><a href="../FAQ.html">FAQ</a></li>
                <li><a href="../About.html">About</a></li>
                <li style="float:right"><a class="active" href="login">Login</a></li>
            </ul>
        </div>
        <br>
<!--         <ul>
            <li><a href="home"></a></li>
            <li><a href="protfolio"></a></li>
            <li><a href="about me"></a></li>
            <li><a href="contact"></a></li>
        </ul>
 -->   
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