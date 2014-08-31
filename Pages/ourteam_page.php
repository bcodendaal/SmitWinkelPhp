<?php
if($_SESSION['lang'] == 'af')
{
    include 'includes/Home/OurTeam.af.php';
}
else
{
include 'includes/Home/OurTeam.php';
}
?>
<h1>
    <?php
    echo lang('Header')
    ?>
</h1>
<hr/>
<div>
    <img class="img-ourstaff"src="Theme/Images/OurStaff.png" alt=""/>
</div>
<div class="staffSection">
    <h3>
         <?php
        echo lang('DentistsSubHeader')
    ?>
    </h3>
    <div>
         <?php
        echo lang('Dentist1')
    ?>
    </div>
    <div>
         <?php
        echo lang('Dentist2')
    ?>
    </div>
    <div>
         <?php
        echo lang('Dentist3')
    ?>
    </div>
    <div>
         <?php
        echo lang('Dentist4')
    ?>
    </div>
</div>
<div class="staffSection">
    <h3>
          <?php
        echo lang('OralHygienistSubHeader')
    ?>
    </h3>
    
    <div>
          <?php
        echo lang('OralHygienist1')
    ?>
    <br/>
         <?php
        echo lang('OralHygienist2')
    ?>
    </div>
</div>
<div class="staffSection">
    <h3>
           <?php
        echo lang('AuxilaryStaffSubHeader')
    ?>
    </h3>
    
      <div>
          
         <?php
        echo lang('AuxilaryStaff1')
    ?>
    </div>
    
      <div>
          
         <?php
        echo lang('AuxilaryStaff2')
    ?>
    </div>
    
      <div>
          
         <?php
        echo lang('AuxilaryStaff3')
    ?>
    </div>
    
      <div>
          
         <?php
        echo lang('AuxilaryStaff4')
    ?>
    </div>
    
    <div>
          
         <?php
        echo lang('AuxilaryStaff5')
    ?>
    </div>
</div>
<!--<div style="clear: both">&nbsp;</div>-->
<div class="staffSection">
    <h3>
           <?php
        echo lang('ReceptionAdminSubHeader')
    ?>
    </h3>
    <div>
          
         <?php
        echo lang('ReceptionAdmin1')
    ?>
    </div>
    
     <div>
          
         <?php
        echo lang('ReceptionAdmin2')
    ?>
    </div>
    
    <div>
          
         <?php
        echo lang('ReceptionAdmin3')
    ?>
    </div>
</div>
