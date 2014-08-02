<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="Theme/CSS/main.css" rel="stylesheet" type="text/css"/>
    <script src="Scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
</head>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                    <div class="content-imgBoxWrapper">
                        <div class="content-imgBox imgBox1">
                        </div>
                        <div class="content-imgBox imgBox2">
                        </div>
                        <div class="content-imgBox imgBox3">
                        </div>
                    </div>
                    <div class="content-pageWrapper">
                        <?php include($page_content);?>
                    </div>
                </div>
            </div>
            <div id="footer" class="footer-wrapper">
            <div class="footer-container container">
                Footer
            </div>
        </div>
    </body>
</html>

<script src="Scripts/Common.js" type="text/javascript"></script>












<!-- Corner of shame


<div class="shadowBox-wrapper clearfix">
    <div class="shodowBox-Container-top clearfix">
        <div class="shadowBoxTopLeftTop"></div>
        <div class="shadowBoxTop"></div>
        <div class="shadowBoxTopRightTop"></div>
    </div>
    <div class="shadowBox-Container-mid cleafix">
        <div class="shadowBox-Content">
            Box Content Goes here
            <br/>
            Text content
        </div>
    </div>
    <div class="shodowBox-Container-bottom clearfix">
        
    </div>
</div>

!->