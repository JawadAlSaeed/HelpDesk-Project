<?php 
    session_start();
?>

<html>

<head>
    <title>HelpDesk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/mainCSS.css" rel="stylesheet" type="text/css" />                          
    <script src="https://kit.fontawesome.com/25823c862e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet" type="text/css" />
    <link href="css/infoMessages.css" rel="stylesheet" type="text/css" />
    <link href="css/form.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="content">
        <div class="title">
            <i class="fas fa-hands-helping fa-2x"></i>
            <h1>&nbsp;HelpDesk</h1>
        </div>
        <div class="loginErrors">
            <?php 
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '  <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            Fill in all of the fields.
                            </div>';
                }
                else if ($_GET['error'] == "wrongpwd") {
                    echo '  <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            Wrong Username or password.
                            </div>';
                }
                else if ($_GET['error'] == "nouser") {
                    echo '  <div class="isa_error">
                            <i class="fa fa-times-circle"></i>
                            No such user.
                            </div>';
                }
            }
            ?>
        </div>
        <div class="header">
            <a href="About.php"></a>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Requests.php">Requests</a></li>
                <li><a class="active" href="Suggestions.php">Suggestions</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <div>
                        <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<div class="aligner">';
                            
                            echo '<form action="includes/logout.inc.php" method="post">
                            <div style="float: right; padding-bottom: 10px;">
                                <button id="log" type="submit" name="logout-submit">logout</button>
                            </div>
                            </form>';
                            echo "<article> Welcome, {$_SESSION['userUid']} &nbsp;&nbsp;</article>";
                            echo '</div>';
                        }
                        else{
                            echo '
                                <div style="float: left">
                                    <form action="includes/login.inc.php" method="post">
                                    <div class="group">
                                    <input type="text" name="mailuid" placeholder="Username"> 
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <input type="Password" name="pwd" placeholder="Password">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    </div>
                                    <button id="log" type="submit" name="login-submit">Login</button>
                                    </form>
                                </div>
                                <div style="float: right">
                                    <a style="float: right" href="signup.php">Signup</a>
                                </div>
                            ';
                        }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
        <br><br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">help us improve the improve the company</h1>
            </center>
        </div>
        <br><br>

        <div class="container">
        <form action="contactForm.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="name">Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" placeholder="Your name...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="example@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Subject</label>
                </div>
                <div class="col-75">
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </div>
            </div>
             <div class="row">
                <div class="col-25">
                    <label for="message">Message</label>
                </div>
                <div class="col-75">
                    <textarea id="body" name="body" placeholder="What's on your mind?" style="height:200px"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>


    </div>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email)  && isNotEmpty(subject) && isNotEmpty(body)){
                $.ajax({
                    url: 'contactForm.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject(),
                        body: body.val()
                    }, success: function (responce){
                        console.log(responce);
                    }
                });
            }

            function isNotEmpty(caller){
                if (caller.val() == ""){
                    caller.css('border'.'1px solid red');
                    return false;
                }
                else{
                    caller.css('border'.'');
                    return true;
                }
            }
        }


    </script>
</body>

</html>

<?php 
require "footer.php";
 ?>