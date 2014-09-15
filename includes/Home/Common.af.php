<?php function commonlang($phrase){static $_L = array(
    'MainHeader' => 'Tandartse',
  
       'Home' => 'Tuis',
     'OurTeam' => 'Ons Span',
     'DentalServices' => 'Dienste',
     'NewPatient' => 'Nuwe Pasiënt',
     'MakeAppointment' => 'Maak \'n afspraak',
    'ContactUs' => 'Kontak Ons',
    
    
    'BookHeader' => 'Maak \'n afspraak',    
    'BookContent' => 'Klik hier om \'n vorm in te vul om U afspraak te maak',
    
    'NewPatientHeader' => 'Nuwe pasiënt?',    
    'NewPatientContent' => 'Spaar tyd en vul die Nuwe Pasiënt Registrasie vorm in aanlyn',
    
    'OfficeHoursHeader' => 'Kantoor Ure',
    'OfficeHoursContent' => '

                                <u>Maandag-Vrydag:</u>
                                </br>
                                
                                7h30-17h30
                      </br>
                                <u>Saterdae: </u>
        </br>                        
                                (Slegs mondhigiëniste per afrspraak)                                 
</br>
                                7h30-11h30                            
'  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>