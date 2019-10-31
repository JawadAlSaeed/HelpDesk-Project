<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Fill in all fields.
                    </div>';
        }
    }
?>