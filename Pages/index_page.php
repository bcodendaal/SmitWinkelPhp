<?php
if($_SESSION['lang'] == 'af')
{
include '/../includes/Home/index.af.php';
}
else
{
include '/../includes/Home/index.php';    
}
?>

<h1>
    <?php
    echo lang('Header')
    ?>
</h1>
<hr/>
<img class="homeImage" src="Theme/Images/fadedDentist_1.png" alt=""/>
<div>
    <?php
    echo lang('ContentParagraf1')
    ?>
</div>
<br/>
<div>
    <?php
    echo lang('ContentParagraf2')
    ?>
</div>
<br/>
<div>
    <?php
    echo lang('ContentParagraf3')
    ?>
</div>
<br/>
<div>
    <?php
    echo lang('ContentParagraf4')
    ?>
</div>
<br/>
<div>
    <?php
    echo lang('ContentParagraf5')
    ?>
</div>
<br/>
<div>
    <?php
    echo lang('ContentParagraf6')
    ?>
</div>

