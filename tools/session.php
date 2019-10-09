<?php
    if (isset($_SESSION['userId'])) {
        echo '<a href="account.php">Account</a>';
        echo '<div class="aligner">
            <form action="includes/logout.inc.php" method="post">
                <button id="log" type="submit" name="logout-submit">logout</button>
            </form>';
            echo "<article> Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</article>";
        echo '</div>';
    }
    else{
        echo '
            <a style="float: right" href="login.php">Login</a>
            <a style="float: right" href="signup.php">Signup</a>
        ';
    }
?>