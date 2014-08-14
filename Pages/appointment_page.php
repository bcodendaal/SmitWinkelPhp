<?php 
if($_SESSION['lang'] == 'af')
{
include 'includes/Home/Appointment.af.php';
}
else
{
include 'includes/Home/Appointment.php';
}
?>

<h2>Appointment</h2>
<h1>   
    <?php
    echo lang('Header')
    ?>
</h1>
<b>
    <?php
    echo lang('PleaseComplete')
    ?>
</b>
<p>
    <?php
    echo lang('WeWillContact')
    ?>
</p>

<form method="POST" id="appointmentform" action="Appointment">
    <div class="container">
        <!-- First Name -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('FirstName')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><input type="text" name="first_name" class="validate textbox" /></div>
            </div>            
        </div>

        <!-- Surname -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('Surname')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><input type="text"  name="surname_name" class="validate textbox" /></div>
            </div>            
        </div>

        <!-- Email -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('Email')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><input type="text" name="email" class="validate textbox" /></div>
            </div>            
        </div>

        <!-- Contact Number -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('ContactNumber')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><input type="text"  name="contact_number" class="validate textbox" /></div>
            </div>            
        </div>

        <!-- Contact Method -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">                    
                    <?php
                    echo lang('HowShouldWeContact')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 radiocontainer">
                    <div>
                        <?php
                        echo lang('Email2')
                        ?>

                        <input type="radio" name="contact" class="validate" /></div>
                    <div>
                        <?php
                        echo lang('Phone')
                        ?>

                        <input type="radio" name="contact" class="validate" /></div>
                </div>
            </div>
        </div>

        <!-- Medical Aid -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('MedicalAidQuestion')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 radiocontainer">
                    <div>
                        <?php
                        echo lang('MedicalAid')
                        ?>

                        <input type="radio" name="medicalaid" class="validate textbox" />
                    </div>
                    <div>
                        <?php
                        echo lang('Private')
                        ?>

                        <input type="radio" name="medicalaid" class="validate textbox" />
                    </div>
                </div>
            </div>            
        </div>

        <!-- When? -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('When')
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group date">
                        <input type="text" class="textbox form-control validate"><span class="input-group-addon"><i class="glyphicon glyphicon-th" id="calendarpop"></i></span>
                    </div>
                </div>                
            </div>            
        </div>

        <!-- Reason -->
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    echo lang('Reason')
                    ?>
                </div>
            </div>
            <div class="row">               
                <div class="col-md-3"><input type="text" class="textbox" name="reason" /></div>
            </div>            
        </div>

        <input type="submit" id="appointmentSubmit" value="Submit" />
    </div>
    
</form>

<script type="text/javascript">
    $(document).ready(function() {
        $('#appointmentSubmit').click(function(e) {
            if (!Validate('appointmentform')) {
                e.preventDefault();
            }
        });
    });

    $('.input-group.date').datepicker({
        format: "mm/dd/yyyy"
    });

    $('#calendarpop').click(function() {
        $('.form-control').removeClass('error');
    });
</script>



