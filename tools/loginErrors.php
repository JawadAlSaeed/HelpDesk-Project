<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Fill in all of the fields.
                    </div>';
        }
        else if ($_GET['error'] == "wrongpwd") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Wrong Username or password.
                    </div>';
        }
        else if ($_GET['error'] == "nouser") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    No such user.
                    </div>';
        }
    }
?>