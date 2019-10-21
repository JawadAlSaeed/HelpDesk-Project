<?php 
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Type something to search!
                    </div>';
        }
        else if ($_GET['error'] == "nothingfound") {
            echo '  <div class="isa_error">
                    <i class="fa fa-times-circle"></i>
                    Nothing found.
                    </div>';
        }
    }
?>