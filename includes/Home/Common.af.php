<?php function commonlang($phrase){static $_L = array(
    'MainHeader' => 'Tandheelkundiges',
  
       'Home' => 'Tuis',
     'OurTeam' => 'Ons Span',
     'DentalServices' => 'Dienste',
     'NewPatient' => 'Nuwe Pasiënt',
     'MakeAppointment' => 'Maak \'n afspraak',
    'ContactUs' => 'Kontak Ons',
    
    
    'BookHeader' => 'Maak \'n afspraak',    
    'BookContent' => 'Klik hier om \'n form in te vul om U afspraak te maak',
    
    'NewPatientHeader' => 'Nuwe patiënt?',    
    'NewPatientContent' => 'Spaar tyd en vul die Nuwe Patiënt Registrasie form in aanlyn',
    
    'OfficeHoursHeader' => 'Kantoor Ure',
    'OfficeHoursContent' => '
        </br>
                                Maandag-Vrydag:
                                </br>
                                
                                7h30-17h30
        </br>                        </br>
                                Saterdae: 
        </br>                        
                                (met afrspraak alleenlik)                                 
</br>
                                7h30-11h30                            
'  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>