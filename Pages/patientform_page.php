<?php
if($_SESSION['lang'] == 'af')
{
include 'includes/Home/PatientForm.af.php';
}
else
{
include 'includes/Home/PatientForm.php';    
}
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
<form action="Pages/newpatient_email.php" id="newpatientform" method="post" >
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
                    <input type="text" class="textbox" name="title" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Initials')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="initials" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Surname')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="surname" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PhysicalAddress')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="physicaladdress" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PostalAddress')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="postaladdress" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('HomeNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="homenumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('WorkNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="worknumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('CellNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="cellnumber" class="validate" /></td>
            </tr>

            <tr>
                <td> <?php
                    echo lang('MedicalAid')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="medicalaid" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('MedicalAidNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="medicalaidnumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('IDNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="idnumber" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Occupation')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="occupation" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Employer')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="employer" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Email')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="email" class="validate" /></td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('NearestFamily')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="nearestfamily" /></td>
            </tr>
            
            <tr>
                <td>
                    <?php
                    echo lang('Relationship')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="relationship" /></td>
            </tr>
            
             <tr>
                <td>
                    <?php
                    echo lang('FamilyAddress')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="familyaddress" /></td>
            </tr>
            
             <tr>
                <td>
                    <?php
                    echo lang('FamilyCode')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="familycode" /></td>
            </tr>
            
             <tr>
                <td>
                    <?php
                    echo lang('FamilyPhone')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="familyphone" /></td>
            </tr>

             <tr>
                <td>
                    <?php
                    echo lang('FamilyCell')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="familycell" /></td>
            </tr>
            
             <tr>
                <td>
                    <?php
                    echo lang('RecommendedBy')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="recommendedby" /></td>
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
                    <input type="text" class="textbox" name="patientsurname" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientFullName')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientfullname" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientDateOfBirth')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientdateofbirth" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientIDNumber')
                    ?>
                </td>
                <td>
                    <input type="text"  class="textbox" name="patientidnumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientOccupation')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientoccupation" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientCompany')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientcompany" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientHomeLanguage')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patienthomelanguage" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientMaritalStatus')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientmaritalstatus" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientHomeNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patienthomenumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientWorkNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientworknumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientCellNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientcellnumber" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('PatientMedicalDependantNumber')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="patientmedicaldependantnumber" />
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
                    <input type="checkbox" class="textbox" name="coronarytrombosis" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Hypertension')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox"  name="hypertension" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Diabetes')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox"  name="diabetes" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('KidneyDisease')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox" name="kidney" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Hepatitus')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox" name="hepatitus" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('AIDS')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox" name="aids" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Astma')
                    ?>
                </td>
                <td>
                    <input type="checkbox" class="textbox" name="astma" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Allergies')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="allergies" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Bleeding')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="bleeding" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Pregnant')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="pregnant" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Other')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="other" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Medication')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="medication" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Smoke')
                    ?>
                </td>
                <td>
                    <input type="text"class="textbox"  name="smoke" />
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo lang('Osteoporosis')
                    ?>
                </td>
                <td>
                    <input type="text" class="textbox" name="osteoporosis" />
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
