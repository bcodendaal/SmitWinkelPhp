<?php
if ($_SESSION['lang'] == 'af') {
    include 'includes/Home/Success.af.php';
} else {
    include 'includes/Home/Success.php';
}
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
        <?php
        echo lang('Submitted')
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
