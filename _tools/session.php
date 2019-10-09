<?php
    if (isset($_SESSION['userId'])) {
        echo '<div class="aligner">
                <form action="includes/logout.inc.php" method="post">
                    <div style="float: right; padding-bottom: 10px;">
                        <button id="log" type="submit" name="logout-submit">logout</button>
                    </div>
                </form>';
                echo "<article> Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</article>";
        echo '</div>';
    }
    else{
        echo '
            <div style="float: right">
                <a style="float: right" href="login.php">Login</a>
            </div>
            <div style="float: right">
                <a style="float: right" href="signup.php">Signup</a>
            </div>';
    }
?>