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

<h2>
    <?php
    echo lang('Header')
    ?>
</h2>
<div>
    <?php
    echo lang('ContentParagraf1')
    ?>
</div>

<div>
    <?php
    echo lang('ContentParagraf2')
    ?>
</div>

<div>
    <?php
    echo lang('ContentParagraf3')
    ?>
</div>

<div>
    <?php
    echo lang('ContentParagraf4')
    ?>
</div>

<div>
    <?php
    echo lang('ContentParagraf5')
    ?>
</div>

<div>
    <?php
    echo lang('ContentParagraf6')
    ?>
</div>