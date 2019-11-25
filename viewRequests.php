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
    <link href="css/table.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="header">
            <a href="About.php"></a>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a class="active" href="Requests.php">Requests</a></li>
                <li><a href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQs</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
            <br><br>
        </div>
        <br>
        <div class="loginChecker">
            <?php 
                require "tools/loginChecker.php";
            ?>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Your requests</h1>
            </center>
            <br><br>
        </div>
        <div class="container">
            <?php
                $uidUsers = $_SESSION['userUid'];
                //--------------------------------------------------------------------------
                $DBConnect = mysqli_connect("localhost","root","");
                if (!$DBConnect) 
                {
                    die('Could not connect: ' . mysqli_error());
                }
                $DBName = "helpdeskdb";
                mysqli_select_db($DBConnect,$DBName);
                $QueryString = "SELECT * FROM requests WHERE uidUsers = '$uidUsers'";
                $QueryResult = mysqli_query($DBConnect,$QueryString)
                     Or die("<p> Unable to execute query. </p>"
                     . "<p> Error code  " .  mysqli_errno($DBConnect)
                     .  ": " . mysqli_error($DBConnect)) . "</p>" ;
                //-------------------------------------------------------------------------
                echo "<center> <table class='tab'>";
                echo "<tr> <th>Requests ID</th> <th>Username</th> <th>Department</th> <th>Category</th> <th>priority</th> <th>description</th> <th>Date created</th> <th>state</th> <th>Date closed</th></tr>";
                // keeps getting the next row until there are no more to get
                while($row = mysqli_fetch_array( $QueryResult )) {
                    echo "<tr> <td>"; 
                    echo $row['requestID'];
                    echo "</td><td>"; 
                    echo $row['uidUsers'];
                    echo "</td><td>"; 
                    echo $row['department'];        
                    echo "</td><td>"; 
                    echo $row['category'];        
                    echo "</td><td>"; 
                    echo $row['priority'];
                    echo "</td><td>"; 
                    echo $row['description'];
                    echo "</td><td>";
                    echo $row['requestCreated'];
                    echo "</td><td>";
                    echo $row['state'];
                    echo "</td><td>";  
                    echo $row['closedOn'];
                    echo "</td></tr>";
                } 
                echo "</table></center>";
                mysqli_close($DBConnect);
            ?> 
        </div>
    </div>
    <br>
    <br>
    <br>
</body>

</html>

<?php 
    require "tools/footer.php";
?>