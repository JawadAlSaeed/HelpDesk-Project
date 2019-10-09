<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Fill in all of the fields.
            </div>';
        }
        else if ($_GET['error'] == "invaliduidmail") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Invalid username and E-mail.
            </div>';
        }
        else if ($_GET['error'] == "invaliduid") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Invalid username.
            </div>';
        }
        else if ($_GET['error'] == "invalidmail") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Invalid E-mail.
            </div>';
        }
        else if ($_GET['error'] == "passwordcheck") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Your passwords do not match.
            </div>';
        }
        else if ($_GET['error'] == "usertaken") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Username is already taken.
            </div>';
        }
        else if ($_GET['error'] == "emailtaken") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                email is already taken.
            </div>';
        }
    }
    else if (isset($_GET['signup']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Sign up is successful!
        </div>';
    }
?>