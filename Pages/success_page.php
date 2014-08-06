<?php
include '/../includes/Home/Success.php';
?>


<h2>
    <?php
    echo lang('SuccessHeader')
    ?>
</h2>

<div>    
    <span>
        <?php
        echo lang('Your')
        ?>


        @ViewData["Message"] 

        <?php
        echo lang('Submitted')
        ?>
    </span>
</div>
<div>
    <a href="Index">
        <?php
        echo lang('Home')
        ?>
    </a> 
</div>
