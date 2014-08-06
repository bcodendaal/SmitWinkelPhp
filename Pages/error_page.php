<?php 
include '/../includes/Home/Error.php';
?>


<h2>
    <?php
    echo lang('Header')
    ?>
    @Error.ErrorHeader</h2>

<div>    
    <span>
        <?php
    echo lang('Header')
    ?>
        @Error.Sorry @ViewData["Message"] 
        <?php
    echo lang('Header')
    ?>
        @Error.ToOurPractice </span>
</div>
<div>
   <a href="Index">
       <?php
    echo lang('Header')
    ?>
       @SmitWinkel.Resources.Common.Home</a> 
    <input type="hidden" value="@ViewData["Error"]" />
</div>
