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
    <h2>
         <?php
        echo lang('DentistsSubHeader')
    ?>
    </h2>
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
    <br/>
    <h2>
          <?php
        echo lang('OralHygienistSubHeader')
    ?>
    </h2>
    
    <div>
          <?php
        echo lang('OralHygienist1')
    ?>
        
         <?php
        echo lang('OralHygienist2')
    ?>
    </div>
    <br/>
    <h2>
           <?php
        echo lang('ReceptionAdminSubHeader')
    ?>
    </h2>
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
    <br/>
    <h2>
           <?php
        echo lang('AuxilaryStaffSubHeader')
    ?>
    </h2>
    
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
</div>
