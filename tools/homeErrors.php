<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "notloggedin") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    You need to login first
                    </div>';
        }
    }
    else if (isset($_GET['signup']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Sign up is successful!
        </div>';
    }
    else if (isset($_GET['accountdeleted']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Account deleted!
        </div>';
    }
    else if (isset($_GET['login']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Login is successful!
        </div>';
    }
    else if (isset($_GET['emailsent']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Email sent successfully!
        </div>';
    }

?>