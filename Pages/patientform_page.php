<?php
include '/../includes/Home/PatientForm.php';
?>

<h2>
    <?php
    echo lang('Header')
    ?>
</h2>
<div>
    <?php
    echo lang('Header')
    ?>

</div>
<form action="/Home/PatientForm" id="newpatientform" method="post" >
    <div class="container" id="patientForm1" style="display: block">
        <div>
            <?php
            echo lang('SubHeader1')
            ?>

        </div>
        <table class="table">
            <tr>
                <td>
                    <?php
                    echo lang('Title')
                    ?>
                </td>
                <td>
                    <input type="text" name="title" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Initials')
                    ?>
                </td>
                <td>
                    <input type="text" name="initials" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Surname')
                    ?>
                </td>
                <td>
                    <input type="text" name="surname" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PhysicalAddress')
                    ?>
                </td>
                <td>
                    <input type="text" name="physicaladdress" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PostalAddress')
                    ?>
                </td>
                <td>
                    <input type="text" name="postaladdress" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('HomeNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="homenumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('WorkNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="worknumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('CellNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="cellnumber" class="validate" /></td>
            </tr>

            <tr>
                <td> <?php
                    echo lang('MedicalAid')
                    ?>
                </td>
                <td>
                    <input type="text" name="medicalaid" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('MedicalAidNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="medicalaidnumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('IDNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="idnumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Occupation')
                    ?>
                </td>
                <td>
                    <input type="text" name="occupation" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Employer')
                    ?>
                </td>
                <td>
                    <input type="text" name="employer" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Email')
                    ?>
                </td>
                <td>
                    <input type="text" name="email" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('NearestFamily')
                    ?>
                </td>
                <td>
                    <input type="text" name="nearestfamily" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Relationship')
                    ?>
                </td>
                <td>
                    <input type="text" name="relationship" /></td>
            </tr>
        </table>
        
        <button id="next1">
            <?php
            echo lang('Next')
            ?>
        </button>
    </div>
    <div class="container" id="patientForm2" style="display: none">
        <div>
            <?php
            echo lang('SubHeader2')
            ?>

        </div>
        <table class="table">
            <tr>
                <td>
                    <?php
                    echo lang('PatientSurname')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientsurname" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientFullName')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientfullname" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientDateOfBirth')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientdateofbirth" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientIDNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientidnumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientOccupation')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientoccupation" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientCompany')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientcompany" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientHomeLanguage')
                    ?>
                </td>
                <td>
                    <input type="text" name="patienthomelanguage" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientMaritalStatus')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientmaritalstatus" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientHomeNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="patienthomenumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientWorkNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientworknumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientCellNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientcellnumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientMedicalDependantNumber')
                    ?>
                </td>
                <td>
                    <input type="text" name="patientmedicaldependantnumber" />
                </td>
            </tr>
        </table>
        <button id="prev1">
            <?php
            echo lang('Previous')
            ?>
        </button>

        <button id="next2">
            <?php
            echo lang('Next')
            ?>
        </button>
    </div>
    <div class="container" id="patientForm3" style="display: none">
        <div>
            <?php
            echo lang('SubHeader3')
            ?>

        </div>
        <table class="table">
            <tr>
                <td>
                    <?php
                    echo lang('Rheumatic')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="rheumatic" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('CoronaryTrombosis')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="coronarytrombosis" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Hypertension')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="hypertension" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Diabetes')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="diabetes" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('KidneyDisease')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="kidney" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Hepatitus')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="hepatitus" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('AIDS')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="aids" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Astma')
                    ?>
                </td>
                <td>
                    <input type="checkbox" name="astma" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Allergies')
                    ?>
                </td>
                <td>
                    <input type="text" name="allergies" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Bleeding')
                    ?>
                </td>
                <td>
                    <input type="text" name="bleeding" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Pregnant')
                    ?>
                </td>
                <td>
                    <input type="text" name="pregnant" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Other')
                    ?>
                </td>
                <td>
                    <input type="text" name="other" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Medication')
                    ?>
                </td>
                <td>
                    <input type="text" name="medication" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Smoke')
                    ?>
                </td>
                <td>
                    <input type="text" name="smoke" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Osteoporosis')
                    ?>
                </td>
                <td>
                    <input type="text" name="osteoporosis" />
                </td>
            </tr>
        </table>
    </div>

    <input id="submitform" type="submit" style="display: none" />

</form>



<script type="text/javascript">
    $(document).ready(function() {
        $('#next1').click(function() {
            if (Validate('patientForm1')) {
                $('#patientForm1').hide();
                $('#patientForm3').hide();
                $('#submitform').hide();
                $('#patientForm2').show();
            }            
            return false;
        });

        $('#next2').click(function() {
            if (Validate('patientForm2')) {
                $('#patientForm1').hide();
                $('#patientForm2').hide();
                $('#submitform').show();
                $('#patientForm3').show();
            }
            return false;
        });

        $('#prev1').click(function() {
            $('#patientForm2').hide();
            $('#patientForm3').hide();
            $('#patientForm1').show();
            $('#submitform').hide();
            return false;
        });



        $('#submitform').click(function() {
            if (!Validate('patientForm3')) {
                e.preventDefault();
            }
        });
    });

</script>
