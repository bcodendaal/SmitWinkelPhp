<?php
if($_SESSION['lang'] == 'af')
{
include '/../includes/Home/NewPatient.af.php';
}
else
{
include '/../includes/Home/NewPatient.php';    
}
?>

<h2>
    <?php
    echo lang('Header')
    ?>
</h2>

<div>
    <?php
    echo lang('NewPatientPara1')
    ?>

</div>

<div>
    <?php
    echo lang('NewPatientPara2')
    ?>

</div>

<a href="patientform.php">
    <?php
    echo lang('Form')
    ?>
</a>