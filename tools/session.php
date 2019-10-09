<?php
    if (isset($_SESSION['userId'])) {
        echo '<li style="float:right">
                <form action="includes/logout.inc.php" method="post">
                    <button id="log" type="submit" name="logout-submit">logout</button>
                </form>
            <li>';
        echo '<li style="float:right"><a href="account.php">Account</a></li>';
        echo "<article> Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</article>";
    }
    else{
        echo '
            <li style="float:right"><a href="login.php">Login</a></li>
            <li style="float:right"><a href="signup.php">Signup</a></li>
        ';
    }
?>