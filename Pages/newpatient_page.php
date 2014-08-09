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

<h1>
    <?php
    echo lang('Header')
    ?>
</h1>
<hr/>
<div>
    <?php
    echo lang('NewPatientPara1')
    ?>

</div>

<br/>

<div>
    <?php
    echo lang('NewPatientPara2')
    ?>

</div>

<br/>

<a href="patientform.php">
    <?php
    echo lang('Form')
    ?>
</a>