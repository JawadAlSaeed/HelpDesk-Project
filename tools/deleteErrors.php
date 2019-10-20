<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "wrongpwd") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    wrong old password.
                    </div>';
        }
    }
?>