<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>HelpDesk</title>
    <link rel="stylesheet" type="text/css" href="../css/main">
</head>

<body>
    <header>
        <a href="#">
            <img src="../picture/help.png" alt="logo">
        </a>
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