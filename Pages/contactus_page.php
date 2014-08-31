<?php
if($_SESSION['lang'] == 'af')
{
    include 'includes/Home/ContactUs.af.php';
}
else
{
include 'includes/Home/ContactUs.php';
}
?>

<h1>
    <?php
    echo lang('Header')
    ?>
</h1>
<hr/>
<div>
    <div class="whereWeAre">
        <div>
            <h2>
            <?php
                echo lang('WhereAreWe')
            ?>
            </h2>
        </div>
        <div>
            <?php
                echo lang('Address')
            ?>
        </div>
    </div>
    <div class="contactNo">
        <div>
            <h2>
            <?php
                echo lang('ContactNumbers')
            ?>
            </h2>
        </div>

            <div>
            <?php
                echo lang('Tel')
            ?>
        </div>
            <div>
            <?php
                echo lang('Fax')
            ?>
        </div>
    </div>
         <div style="clear:both">&nbsp;</div>
    <div class="wheelchair">
        <?php
            echo lang('Wheelchair')
        ?>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3312.4815088011287!2d18.6457531!3d-33.8772509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc50c11346816b%3A0x519b5a4e951d6b3f!2s2+Mountain+View+Rd%2C+Cape+Town+7530!5e0!3m2!1sen!2sza!4v1408290686883" width="600" height="450" frameborder="0" style="border:0"></iframe>
    </div>
</div>
