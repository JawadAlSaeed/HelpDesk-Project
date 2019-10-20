<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Fill in all of the fields.
                    </div>';
        }
        else if ($_GET['error'] == "passwordcheck") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Your passwords do not match.
                    </div>';
        }
        else if ($_GET['error'] == "wrongpwd") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    wrong old password.
                    </div>';
        }
    }
    else if (isset($_GET['changeEmail']) == "success") {
            echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Email changed successfully!
        </div>';
    }
    else if (isset($_GET['changePwd']) == "success") {
            echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Password changed successfully!
        </div>';
    }
?>