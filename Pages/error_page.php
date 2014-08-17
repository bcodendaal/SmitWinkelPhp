<?php 
if($_SESSION['lang'] == 'af')
{
include 'includes/Home/Error.af.php';
}
else
{
include 'includes/Home/Error.php';
}
?>


<h2>
    <?php
    echo lang('ErrorHeader')
    ?>
</h2>

<div>    
    <span>
        <?php
        echo lang('Sorry')
    ?>

        <?php
        echo lang('ToOurPractice')
    ?>
        </span>
</div>
<div>
   <a href="index.php">
       <?php
    echo lang('Home')
    ?>
       </a>     
</div>
