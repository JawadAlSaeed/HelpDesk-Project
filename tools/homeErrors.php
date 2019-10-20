<?php 
    if (isset($_GET['signup']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            Sign up is successful!
        </div>';
    }
    else if (isset($_GET['accountdeleted']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            account deleted!
        </div>';
    }
    else if (isset($_GET['login']) == "success") {
    echo '    <div class="isa_success">
            <i class="fa fa-check"></i>
            login is successful!
        </div>';
    }

?>