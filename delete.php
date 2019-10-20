
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
    <link href="css/alerts.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li>
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br>
        <dir class="deleteErrors">
            <?php 
                require "tools/deleteErrors.php";
            ?>
        </dir>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Delete account</h1>
            <br><br>
        </div>
        <br>
        <div class="container">
            <div class="miniTitle">
                <center>
                    <h1 style="font-size:30px">Enter Password to delete account</h1>
                </center>
                <br><br>
            </div>
            <form action="includes/delete.inc.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="Password">Password</label>
                    </div>
                    <div class="col-75">
                       <input type="password" name="pwd" placeholder="password">
                    </div>
                </div>
                <div class="row">
                    <button class="submitBtn" type="submit" name="delete-submit"  onclick="myFunction()">Submit</button>
                </div>
            </form>
        </div> 
    </div>
    <br>
    <br>
    <br>

<script>
function myFunction() {
  confirm("Are you sure you want to delete your account?");
}
</script>

</body>

</html>

<?php 
    require "tools/footer.php";
?>