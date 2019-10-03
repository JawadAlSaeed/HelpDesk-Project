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
            <div style="float: left">
                <form action="includes/login.inc.php" method="post">
                    <div class="group">
                        <input type="text" name="mailuid" placeholder="Username"> 
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <input type="Password" name="pwd" placeholder="Password">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <button id="log" type="submit" name="login-submit">Login</button>
                </form>
            </div>
            <div style="float: right">
                <a style="float: right" href="signup.php">Signup</a>
            </div>';
    }
?>