<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Fill in all of the fields.
            </div>';
        }
        else if ($_GET['error'] == "invaildtelephone") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                type correct phone number that starts with 966 and has 9 numbers.
            </div>';
        }
        else if ($_GET['error'] == "invailddepartment") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Choose a department
            </div>';
        }
                else if ($_GET['error'] == "invaildpriority") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                choose priority level
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