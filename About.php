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
                <li><a href="FAQ.php">FAQs</a></li>
                <li><a class="active" href="About.php">About</a></li>
                <li style="float:right">
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">About</h1>
            <br><br>
        </div>
        <div class="container">
            Hi, my name is Jawad Al-Saeed, I'm 23 years old, I live in Qatif city in the eastern province. Currently, I'm a trainee at the Al Tuwairqi Holding Company. 
            <br><br>
            I'm a student at the Jubail University College (JUC) and major in Computer Science. 
            <br><br>
            This is a website/application is for the graduation project. it's intended to show the basics of a help desk website of a company.
            <br><br>
            with this website, I'm hoping to show you the programming abilities I'm capable of. 
            <br><br>
            The HelpDesk system has two main parts, the website you currently in, and the IT application. First off, well talk about the website. the website contains three main features:
            <ol>
                <li>Requests/View Requests</li>
                <li>Contact Us Form</li>
                <li>Frequently Asked Questions (FAQs)</li>
            </ol>
            In the IT application, it will have the basic functions to view requests such as:
            <ol>
                <li>View all requests and search through them</li>
                <li>Switch the state of the requests</li>
                <li>Email users of requests</li>
                <li>Delete requests</li>
                <li>View attachment</li>
            </ol>
            <h2>The Website</h2>
            <h3>Requests/View Requests:</h3>
            This is a feature that a user can use to request something from the company. In this page a user can do two things:
            <br><br>
            <b>New request:</b> Makes a new request with your information.
            <br><br>
            <b>View requests:</b> View all old/new requests and their info.
            <h3>Contact Us Form:</h3>
            This feature is used to contact the company to suggest something or to give feedback, this suggestion/feedback doesn't require to be implemented.
            <br>
            The feedback will be sent to the companies via Email.
            <h3>FAQs:</h3>
            Frequently asked questions on the site, these questions are categorized to help users find related questions.
            <br>
            these questions can be configured by IT Employees.
            <br><br>
            <h2>The IT Application</h2>
            The applications is a java program that is used in the IT side which shows the requests of the users.
            <br><br>
            <h3>Search and view all requests:</h3>
            You can view all rquests and search through them by Rquest ID, date, or by department.
            <br><br>
            <h3>Switch the state of the requests:</h3>
            You can "close" the request that are done with or "open" them.
            <br><br>
            <h3>Email users of requests:</h3>
            Selecting a reuqest would enable the button to email the requester.
            <br><br>
        </div>
        </center>

    </div>
    <br>
    <br>
    <br>
    <br>
</body>

</html>

<?php 
    require "tools/footer.php";
?>