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
    <script src="Scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
    <?php 
    if(!isset($_SESSION)) { session_start(); } 
    
    if(!array_key_exists ( 'lang' , $_SESSION))
    {
        $currLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	$_SESSION['lang'] = $currLang; 
    }
	   if ($_SESSION['lang'] == "") { 
	$_SESSION['lang'] = "en"; 
	$currLang = "en"; 
	} else { 
	$currLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); 
	$_SESSION['lang'] = $currLang; 
	} 
?>
    <div class="page-wrapper">
        <div id="header" class="header-wrapper clearfix">
            <div class="header-container container clearfix">
                <?php include('Pages/headerContent_EN.php') ?>
            </div>
        </div>
        <div id="navigation">
            <?php include('Pages/navContent_EN.php') ?>
        </div>
        <div id="content" class="content-wrapper">
            <div class="content-container container">

                    <div class="content-imgBoxWrapper clearfix">
                        
                        <a class="content-imgBox imgBox1">
                            <span class="box1text boxText">
                                <h4>Book an appointment</h4>
                                Click here and fill in a form to make an appointment
                            </span>
                        </a>
                            
                        <div class="content-imgBox imgBox2">
                            <span class="box2text boxText">
                                <h4>New Patient?</h4>
                                Save some time and fill in a New Patient Registration Form online
                            </span>
                        </div>
                        <div class="content-imgBox imgBox3">
                            <span class="box3text boxText">
                                <h4>Office Hours</h4>
                                Monday-Friday:
                                <br/>
                                7h30-17h30
                                <br/>
                                <br/>
                                Saturdays: 
                                <br/>
                                (by appointment only) 
                                <br/>
                                7h30-11h30
                            </span>
                        </div>
                    </div>
                    <div class="content-pageWrapper clearfix">
                        <?php include($page_content);?>
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

