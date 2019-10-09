<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="picture/help.ico" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <!-- <link href="css/input.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/alerts.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
    <link href="css/popup.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="loginErrors">
            <br>
            <br>
            <?php 
                require "tools/loginErrors.php";
            ?>
        </div>
        <div class="header">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a class="active" href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <div>
                        <?php
                            require "tools/session.php"; 
                        ?>
                    </div>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Fill in your info</h1>
            <br><br>
        </div>
        <br><br>

        <div class="container">
            <form action="postRequest.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="telephone">Phone number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="telephone" name="telephone" placeholder="+96612345678">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="area">Request area</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="area" name="department" placeholder="which department do you want this request to go?">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="priority">Priority</label>
                    </div>
                    <div class="col-75">                   
                        <select id="priority" name="priority">
                          <option value="Low">Low</option>
                          <option value="Moderate">Moderate</option>
                          <option value="High">High</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="message">Request description</label>
                    </div>
                    <div class="col-75">
                        <textarea id="description" name="description" style="height:200px"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <!-- Trigger/Open The Modal -->
            <button class="popupbutton" id="myBtn">Available Departments</button>
            <!-- The Modal -->
            <div id="myModal" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <b>Available Departments:</b> <br>
                  <p>Network Department </p>
                  <p>Support Department </p>
                  <p>System Department </p>
                  <small style="float: right">*copy and paste the exact department name from above list</small>
                  <br>

              </div>
            </div>
            <br>
            <br>
            <br>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        </center>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>
</body>

</html>

<?php 
require "footer.php";
?>