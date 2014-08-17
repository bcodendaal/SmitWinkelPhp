<?php

$title = "";
$initials = "";
$surname = "";
$physicaladdress = "";
$postaladdress = "";
$worknumber = "";
$homenumber = "";
$cellnumber = "";
$medicalaid = "";
$medicalaidnumber = "";
$idnumber = "";
$occupation = "";
$employer = "";
$email = "";
$nearestfamily = "";
$relationship = "";
$familyaddress = "";
$familycode = "";
$familyphone = "";
$familycell = "";
$recommendedby = "";
$patientsurname = "";
$patientfullname = "";
$patientdateofbirth = "";
$patientidnumber = "";
$patientoccupation = "";
$patientcompany = "";
$patienthomelanguage = "";
$patientmaritalstatus = "";
$patienthomenumber = "";
$patientworknumber = "";
$patientcellnumber = "";
$patientmedicaldependantnumber = "";
$rheumatic = "";
$coronarytrombosis = "";
$hypertension = "";
$diabetes = "";
$kidney = "";
$hepatitus = "";
$aids = "";
$astma = "";
$allergies = "";
$bleeding = "";
$pregnant = "";
$other = "";
$medication = "";
$smoke = "";
$osteoporosis = "";

if (isset($_POST)) {
    if (array_key_exists('title', $_POST)) {
        $title = $_POST['title'];
    }
    if (array_key_exists('initials', $_POST)) {
        $initials = $_POST['initials'];
    }
    if (array_key_exists('surname', $_POST)) {
        $surname = $_POST['surname'];
    }
    if (array_key_exists('physicaladdress', $_POST)) {
        $physicaladdress = $_POST['physicaladdress'];
    }
    if (array_key_exists('postaladdress', $_POST)) {
        $postaladdress = $_POST['postaladdress'];
    }
    if (array_key_exists('homenumber', $_POST)) {
        $homenumber = $_POST['homenumber'];
    }
    if (array_key_exists('worknumber', $_POST)) {
        $worknumber = $_POST['worknumber'];
    }
    if (array_key_exists('cellnumber', $_POST)) {
        $cellnumber = $_POST['cellnumber'];
    }

    if (array_key_exists('medicalaid', $_POST)) {
        $medicalaid = $_POST['medicalaid'];
    }

    if (array_key_exists('medicalaidnumber', $_POST)) {
        $medicalaidnumber = $_POST['medicalaidnumber'];
    }

    if (array_key_exists('idnumber', $_POST)) {
        $idnumber = $_POST['idnumber'];
    }

    if (array_key_exists('occupation', $_POST)) {
        $occupation = $_POST['occupation'];
    }

    if (array_key_exists('employer', $_POST)) {
        $employer = $_POST['employer'];
    }

    if (array_key_exists('email', $_POST)) {
        $email = $_POST['email'];
    }

    if (array_key_exists('nearestfamily', $_POST)) {
        $nearestfamily = $_POST['nearestfamily'];
    }

    if (array_key_exists('relationship', $_POST)) {
        $relationship = $_POST['relationship'];
    }
    // To add!!!!


    if (array_key_exists('familyaddress', $_POST)) {
        $familyaddress = $_POST['familyaddress'];
    }

    if (array_key_exists('familycode', $_POST)) {
        $familycode = $_POST['familycode'];
    }

    if (array_key_exists('familyphone', $_POST)) {
        $familyphone = $_POST['familyphone'];
    }

    if (array_key_exists('familycell', $_POST)) {
        $familycell = $_POST['familycell'];
    }
    if (array_key_exists('recommendedby', $_POST)) {
        $recommendedby = $_POST['recommendedby'];
    }

    if (array_key_exists('patientsurname', $_POST)) {
        $patientsurname = $_POST['patientsurname'];
    }

    if (array_key_exists('patientfullname', $_POST)) {
        $patientfullname = $_POST['patientfullname'];
    }

    if (array_key_exists('patientdateofbirth', $_POST)) {
        $patientdateofbirth = $_POST['patientdateofbirth'];
    }

    if (array_key_exists('patientidnumber', $_POST)) {
        $patientidnumber = $_POST['patientidnumber'];
    }

    if (array_key_exists('patientoccupation', $_POST)) {
        $patientoccupation = $_POST['patientoccupation'];
    }

    if (array_key_exists('patientcompany', $_POST)) {
        $patientcompany = $_POST['patientcompany'];
    }

    if (array_key_exists('patienthomelanguage', $_POST)) {
        $patienthomelanguage = $_POST['patienthomelanguage'];
    }

    if (array_key_exists('patientmaritalstatus', $_POST)) {
        $patientmaritalstatus = $_POST['patientmaritalstatus'];
    }

    if (array_key_exists('patienthomenumber', $_POST)) {
        $patienthomenumber = $_POST['patienthomenumber'];
    }

    if (array_key_exists('patientworknumber', $_POST)) {
        $patientworknumber = $_POST['patientworknumber'];
    }

    if (array_key_exists('patientcellnumber', $_POST)) {
        $patientcellnumber = $_POST['patientcellnumber'];
    }

    if (array_key_exists('patientmedicaldependantnumber', $_POST)) {
        $patientmedicaldependantnumber = $_POST['patientmedicaldependantnumber'];
    }

    if (array_key_exists('rheumatic', $_POST)) {
        $rheumatic = $_POST['rheumatic'];
    }

    if (array_key_exists('coronarytrombosis', $_POST)) {
        $coronarytrombosis = $_POST['coronarytrombosis'];
    }

    if (array_key_exists('hypertension', $_POST)) {
        $hypertension = $_POST['hypertension'];
    }

    if (array_key_exists('diabetes', $_POST)) {
        $diabetes = $_POST['diabetes'];
    }

    if (array_key_exists('kidney', $_POST)) {
        $kidney = $_POST['kidney'];
    }

    if (array_key_exists('hepatitus', $_POST)) {
        $hepatitus = $_POST['hepatitus'];
    }

    if (array_key_exists('aids', $_POST)) {
        $aids = $_POST['aids'];
    }

    if (array_key_exists('astma', $_POST)) {
        $astma = $_POST['astma'];
    }

    if (array_key_exists('allergies', $_POST)) {
        $allergies = $_POST['allergies'];
    }

    if (array_key_exists('bleeding', $_POST)) {
        $bleeding = $_POST['bleeding'];
    }

    if (array_key_exists('pregnant', $_POST)) {
        $pregnant = $_POST['pregnant'];
    }

    if (array_key_exists('other', $_POST)) {
        $other = $_POST['other'];
    }

    if (array_key_exists('medication', $_POST)) {
        $medication = $_POST['medication'];
    }

    if (array_key_exists('smoke', $_POST)) {
        $smoke = $_POST['smoke'];
    }

    if (array_key_exists('osteoporosis', $_POST)) {
        $osteoporosis = $_POST['osteoporosis'];
    }
}


$to = "pieter.roodt@gmail.com";
$fn = "Fisrt Name";
$ln = "Last Name";
$name = $fn . ' ' . $ln;
$from = "dentist@smitwinkel.com";
$subject = "Welcome to Website";
$message = " 
Verandwoordelik vir rekening:

Titel: $title\n
Voorletters: $initials
Van: $surname
Woonadres: $physicaladdress
Posadres: $postaladdress
Tel (H): $homenumber
Tel (W): $worknumber
Sel: $cellnumber
Mediese fonds: $medicalaid
Nommer: $medicalaidnumber
ID No: $idnumber
Beroep: $occupation
Werkgewer: $employer
Email Adres: $email
Naam familie / vriende: $nearestfamily
Verwantskap: $relationship
Adres: $familyaddress
Kode: $familycode
Tel: $familyphone
Sel: $familycell
Aanbeveel deur: $recommendedby

Pasient besonderhede

Van: $patientsurname
Volle naam: $patientfullname
Geboorte datum: $patientdateofbirth
Id nommer: $patientidnumber
Beroep: $patientoccupation
Werkgewer: $patientcompany
Huistaal: $patienthomelanguage
Huwelikstatus: $patientmaritalstatus
Tel (H): $patienthomenumber
Tel (W): $patientworknumber
Sel: $patientcellnumber
Pasient mediese fonds afhnklike nommer: $patientmedicaldependantnumber

Mediese geskiedenis

Rumatiekkoors: $rheumatic
Koronere trombose of hartprobleme: $coronarytrombosis
Hoe bloeddruk: $hypertension
Suikersiekte: $diabetes
Nierprobleme: $kidney
Geelsug: $hepatitus
Vigs: $aids
Asma: $astma

Allergie: $allergies
Bloedsneigings: $bleeding
Swanger: $pregnant
Ander: $other
Medisyne: $medication
Rook: $smoke
Osteoporose: $osteoporosis
";

$headers = 'From: dentist@smitwinkel.com' . "\r\n" .
        'Reply-To: dentist@smitwinkel.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

try {
    mail($to, $subject, $message, $headers);
    header('Location: ../success.php');
    die();
} catch (Exception $e) {
    header('Location: ../error.php');
    die();
}
?>