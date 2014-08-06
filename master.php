<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Sound Bites Society</title>
    <title></title>
    <link href="Theme/CSS/main.css" rel="stylesheet" type="text/css"/>
    <script src="Scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<body>
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
                        <div class="content-imgBox imgBox1">
                        </div>
                        <div class="content-imgBox imgBox2">
                        </div>
                        <div class="content-imgBox imgBox3">
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

