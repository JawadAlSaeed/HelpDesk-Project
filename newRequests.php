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
        </div>
        <br>
        <div class="requestsErrors">
            <?php 
                require "tools/requestsErrors.php";
            ?>
        </div>
        <div class="loginChecker">
            <?php 
                require "tools/loginChecker.php";
            ?>
        </div>
        <br>
        <div class="subTitle">
            <center>
                <h1 style="font-size:45px">Fill in your info</h1>
            <br><br>
        </div>
        <div class="container">
            <form action="postRequest.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-25">
                        <label for="telephone">Phone number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="telephone" name="telephone" placeholder="966123456789">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="area">Request area</label>
                    </div>
                    <div class="col-75">                   
                        <select id="department" name="department">
                            <option value=" "> </option>
                            <option value="Network Department">Network Department</option>
                            <option value="Support Department">Support Department</option>
                            <option value="System Department">System Department</option>
                            <option value="Sales Department">Sales Department</option>
                            <option value="HR Department">HR Department</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="category">Category of the problem</label>
                    </div>
                    <div class="col-75">                   
                        <select id="category" name="category">
                            <option value="">Others</option>
                            <option value="">Service Related Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Telephone &amp; Conferencing</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Telephone Set</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Telephone Line</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Conferencing</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tranfer Telephone Extension</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Telephone Cable</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others (Please Specify)</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authorization Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;LYNC/Skype Business Communications</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voice Call Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Service Degradation Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lync not working</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Time Attendance</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Timesheet related Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others (Please Specify)</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punching Authorization Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;File Sharing Service</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unable to Access File Folder</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Internet</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slowness Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Internet Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blocked Websites</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Email</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Information</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Service Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quota related Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Network Service</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;List Value</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network is Unstable</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network Slowness Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</option>
                            <option value="">&nbsp;&nbsp;&nbsp;VPN</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VPN Connectivity issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VPN Software Issue</option>
                            <option value="">Software Related Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Time Attendance</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Right Fax</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Microsoft Office</option>
                            <option value="">&nbsp;&nbsp;&nbsp;AutoCAD</option>
                            <option value="">&nbsp;&nbsp;&nbsp;E-Nawafeth</option>
                            <option value="">&nbsp;&nbsp;&nbsp;SAP Client</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Anti-Virus</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Operating System</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Adobe Acrobat</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Miscellaneous (Java/Flash Player /WB Client )</option>
                            <option value="">&nbsp;&nbsp;&nbsp;VPN Client</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Drivers (Laptop/Desktop/Printer/Scanner)</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Others (Please Specify)</option>
                            <option value="">Hardware Related Issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Time Punching Devices</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Access Point</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Connectivity Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Video Conferencing</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video quality</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other issues</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sound issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Voice issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Printer</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Printer Hardware</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Printer Software</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Service Toner/Ink Cartridge</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Laptop</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keyboard issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fan Problem</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouse replacement</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Failure</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Battery</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charger</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network Connectivity</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Disk Failure</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LCD / Monitor issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Telephone</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Desktop</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fan Problem</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Disk Failure</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keyboard issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network Connectivity</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouse replacement</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Failure</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LCD / Monitor issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Industerial Workstations</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mouse replacement</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keyboard issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backup Issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network Connectivity</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Others</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LCD / Monitor issue</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Power Failure</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fan Problem</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Disk Failior</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Camera Devices</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Scanner</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Scanner Software</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Issue in Scanner Hardware</option>
                            <option value="">&nbsp;&nbsp;&nbsp;Mobile Devices</option>
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Related Issue</option>
                        </select>
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
                        <label for="title">Title</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="title" name="title" placeholder="Title">
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
                <div class="row">
                    <div class="col-25" style="margin-top: 16px">
                        <label for="message">Add Attachment (if needed)</label>
                    </div>
                    <div class="col-75">
                        <br>
                        <input type="file" name="file">
                    </div>
                </div>
                <br>
                <div class="row">
                    <button class="submitBtn" type="submit" name="request-submit">Send request</button>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        </center>
    </div>
</body>

</html>

<?php 
    require "tools/footer.php";
?>