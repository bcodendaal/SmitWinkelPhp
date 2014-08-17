<?php function commonlang($phrase){static $_L = array(
    'MainHeader' => 'Dental Surgeons',
    
     'Home' => 'Home',
     'OurTeam' => 'Our Team',
     'DentalServices' => 'Dental Services',
     'NewPatient' => 'New Patient',
     'MakeAppointment' => 'Make an appointment',
        'ContactUs' => 'Contact Us',
  
    'BookHeader' => 'Book an appointment',    
    'BookContent' => 'Click here and fill in a form to make an appointment',
    
    'NewPatientHeader' => 'New Patient?',    
    'NewPatientContent' => 'Save some time and fill in a New Patient Registration Form online',
    
    'OfficeHoursHeader' => 'Office Hours',
    'OfficeHoursContent' => '
        </br>
                                Monday-Friday:
        </br>                        
                                7h30-17h30
        </br></br>                        
                                Saturdays: 
        </br>                        
                                (by appointment only) 
        </br>
                                7h30-11h30                            
'  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>