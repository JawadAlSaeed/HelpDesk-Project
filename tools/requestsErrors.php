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
        else if ($_GET['error'] == "bigsize") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                The size of the file is too big. files below 2mb are only accepted.
            </div>';
        }
        else if ($_GET['error'] == "errormessage") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                error with the file, try again please.
            </div>';
        }
        else if ($_GET['error'] == "wrongtype") {
        echo '    <div class="isa_error">
                <i class="fa fa-times-circle"></i>
                Wrong file type/Extension
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