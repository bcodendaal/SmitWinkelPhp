<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION)) {
    session_start();
}

if (!array_key_exists('lang', $_SESSION)) {
    $currLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION['lang'] = $currLang;
}
if ($_SESSION['lang'] == "") {
    $_SESSION['lang'] = "en";
    $currLang = "en";
} else {
    $currLang = $_SESSION['lang'];
    if (isset($_POST)) {
        if (array_key_exists('langtoggle', $_POST)) {
            $currLang = $_POST['langtoggle'];
            $_SESSION['lang'] = $currLang;
        }
    }
}

if ($_SESSION['lang'] == 'af') {
    include 'includes/Home/Common.af.php';
} else {
    include 'includes/Home/Common.php';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>Smit & Winkel</title>
        <title></title>
        <link href="Theme/CSS/main.css" rel="stylesheet" type="text/css"/>
        <link href="Theme/CSS/main900_768.css" rel="stylesheet" type="text/css"/>
        <link href="Theme/CSS/main768_650.css" rel="stylesheet" type="text/css"/>
        <link href="Theme/CSS/main480_650.css" rel="stylesheet" type="text/css"/>
        <link href="Theme/CSS/main320_480.css" rel="stylesheet" type="text/css"/>
        <link href="Theme/CSS/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
        <script src="Scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="Scripts/jquery.datetimepicker.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="page-wrapper">
            <div id="header" class="header-wrapper clearfix">
                <div class="header-container container clearfix">
                    <?php include('Pages/headerContent.php') ?>
                </div>
            </div>
            <div id="navigation">
                <?php include('Pages/navContent.php') ?>
            </div>
            <div id="content" class="content-wrapper">
                <div class="content-container container">

                    <div class="content-imgBoxWrapper clearfix">

                        <a href="appointment.php" class="content-imgBox imgBox1">
                            <span class="box1text boxText">
                                <h4>
                                    <?php
                                    echo commonlang('BookHeader')
                                    ?>
                                </h4>
                                <?php
                                echo commonlang('BookContent')
                                ?>
                            </span>
                        </a>

                        <a  href="newpatient.php" class="content-imgBox imgBox2">
                            <span class="box2text boxText">
                                <h4>
                                    <?php
                                    echo commonlang('NewPatientHeader')
                                    ?>
                                </h4>

                                <?php
                                echo commonlang('NewPatientContent')
                                ?>                                
                            </span>
                        </a>
                        <a href="#" class="content-imgBox imgBox3">
                            <span class="box3text boxText">
                                <h4>
                                    <?php
                                    echo commonlang('OfficeHoursHeader')
                                    ?>
                                </h4>
                               <?php
                                echo commonlang('OfficeHoursContent')
                                ?>
                            </span>
                        </a>
                    </div>
                    <div class="content-pageWrapper clearfix">
                        <?php include($page_content); ?>
                    </div>

                    <div class="smallImages-wrapper">
                        <div class="smallImageContainer">
                            <a href="appointment.php">
                               <div class="smallImage-wrap">
                                    <img src="Theme/Images/smallImage1.png" class="smallImage" alt=""/>
                                </div>
                                <span class="smallImage-text">
                                <h4>
                                    <?php
                                    echo commonlang('BookHeader')
                                    ?>
                                </h4>
                                <?php
                                echo commonlang('BookContent')
                                ?>
                                </span>
                            </a>
                        </div>
                        <div style="clear:both">&nbsp;</div>
                        <div class="smallImageContainer">
                            <a href="newpatient.php">
                                <div class="smallImage-wrap">
                                    <img src="Theme/Images/smallImage2.png" class="smallImage" alt=""/>
                                </div>
                                <span class="smallImage-text">
                                <h4>
                                    <?php
                                    echo commonlang('NewPatientHeader')
                                    ?>
                                </h4>

                                <?php
                                echo commonlang('NewPatientContent')
                                ?>     
                                </span>
                            </a>
                        </div>
                        <div style="clear:both">&nbsp;</div>
                        <div class="smallImageContainer">
                            <a>
                                <div class="smallImage-wrap">
                                    <img src="Theme/Images/smallImage3.png" class="smallImage" alt=""/>
                                </div>
                                <span class="smallImage-text">
                                    <h4>
                                    <?php
                                    echo commonlang('OfficeHoursHeader')
                                    ?></h4>
                                    <?php
                                    echo commonlang('OfficeHoursContent')
                                    ?>
                                </span>
                                <div style="clear:both">&nbsp;</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="footer-wrapper">
                <div class="footer-container container">
                </div>
            </div>
        </div>
    </body>
</html>

<script src="Scripts/Common.js" type="text/javascript"></script>

