<?php
    if (isset($_SESSION['userId'])) {
        echo '<li style="float:right">
                <form action="includes/logout.inc.php" method="post">
                    <button id="log" type="submit" name="logout-submit">logout</button>
                </form>
            <li>';

        $url = $_SERVER["REQUEST_URI"]; 
        $pos = strrpos($url, "account.php"); 

        if($pos != false) {
            echo '<li style="float:right"><a class="active" href="account.php">Account</a></li>';
        }
        else{
            echo '<li style="float:right"><a href="account.php">Account</a></li>';
        }

        echo '<div class="session">';
            echo "<p>&nbsp;Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</p>";
        echo '</div>';
    }
    else{

        $url = $_SERVER["REQUEST_URI"]; 
        $pos = strrpos($url, "login.php"); 

        if($pos != false) {
            echo '<li style="float:right"><a class="active" href="login.php">Login</a></li>';
        }
        else{
            echo '<li style="float:right"><a href="login.php">Login</a></li>';
        }

        $url = $_SERVER["REQUEST_URI"]; 
        $pos = strrpos($url, "signup.php"); 

        if($pos != false) {
            echo '<li style="float:right"><a class="active" href="signup.php">Signup</a></li>';
        }
        else{
            echo '<li style="float:right"><a href="signup.php">Signup</a></li>';
        }
    }
?>