<?php 
    session_start();

    if(isset($_POST['submit'])){
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['subject']) || empty($_POST['body']) ) {
            header("location: contactUs.php?error=emptyfields");
            exit();
        }
        // else if (!preg_match("/^(966)([0-9]{9})$/", $telephone)) {
        //     header("location: contactUs.php?error=invaildtelephone");
        //     exit();
        // }
        require 'tools/PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'helpdeskproject266@gmail.com';                 // SMTP username
        $mail->Password = 'J35110266d';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom($_POST['email'], $_POST['name']);
        $mail->addAddress('helpdeskproject266@gmail.com', 'HelpDesk');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    = "Name: ".$_POST['name']."<br><br>telephone: ".$_POST['telephone']."<br><br>".$_POST['body'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header("location: home.php?emailsent=success");
            exit();
        }  
    }   
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
                <li><a href="FAQ.php">FAQs</a></li>
                <li><a href="About.php">About</a></li>
                <li style="float:right">
                    <?php
                        require "tools/session.php"; 
                    ?>
                </li>
            </ul>
        </div>
        <br>
        <div class="contactUsErrors">
            <?php 
                require "tools/contactUsErrors.php";
            ?>
        </p>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">help us improve the company</h1>
            </center>
        </div>
        <br><br>
        <div class="container">
            <form action="" method="post" >
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
                        <label for="telephone">Telephone</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="telephone" placeholder="966512345678">
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
                    <button class="submitBtn" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>

   <!--  <script
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
    </script> -->

</body>

</html>

<?php 
    require "tools/footer.php";
?>