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
                <li><a class="active" href="contactUs.php">Contact us</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="About.php">About</a></li>
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
                <h1 style="font-size:45px">help us improve the company</h1>
            </center>
        </div>
        <br><br>

        <div class="container">
            <form action="sendEmail()" method="post">
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
                        <label for="telephone">Telephone</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="telephone" name="telephone" placeholder="+966000000000">
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
                    <input type="submit" onclick="sendEmail()" value="Submit">
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
        }

                    function isNotEmpty(caller){
                if (caller.val() == ""){
                    caller.css('border'.'1px solid red');
                    return false;
                }
                else
                    caller.css('border'.'');

                return true;
                }
            }
    </script>

</body>

</html>

<?php 
require "tools/footer.php";
 ?>