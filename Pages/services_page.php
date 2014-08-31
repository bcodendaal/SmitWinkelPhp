<?php
if($_SESSION['lang'] == 'af')
{
include 'includes/Home/Services.af.php';
}
else
{
include 'includes/Home/Services.php';    
}
?>

<h1>
    <?php
    echo lang('Header')
    ?>
</h1>
<hr/>
<div>
    <ul>
        <li>
        <?php
        echo lang('Service1')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service2')
        ?>
        </li>
        <li>
        <?php
        echo lang('Service3')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service4')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service5')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service6')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service7')
        ?>
        </li>

        <li>
        <?php
        echo lang('Service8')
        ?>
        </li>


        <li>
        <?php
        echo lang('Service9')
        ?>
        </li>
    <ul>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<img style="width: 132px;
float: left;
margin: 0 12px 0px 0px;"src="Theme/Images/Services1.png" alt=""/>
<img style="width: 324px;
float: left;
padding: 0px 0px 32px 0px;"src="Theme/Images/Services2.png" alt=""/>
<img style="width: 199px;
float: left;
margin: 0px 12px 0px 6px;"src="Theme/Images/Services4.png" alt=""/>