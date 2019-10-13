<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Fill in all of the fields.
            </div>';
        }
        else if ($_GET['error'] == "invalidtelephone") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Invalid telephone number, make sure it starts with 966 and contain nine numbers.
            </div>';
        }
    }
    // else if (isset($_GET['signup']) == "success") {
    // echo '    <div class="isa_success">
    //         <i class="fa fa-check"></i>
    //         Sign up is successful!
    //     </div>';
    // }
?>