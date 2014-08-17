    <?php function lang($phrase){static $_L = array(
  'Appointment' => '
   appointment',
  
  'Home' => '
   Home',
  
  'NewPatient' => '
   patient information',
  
  'Submitted' => '
   was successfully sent to our practice. We will contact you soon. Thank you very much',
  
  'SuccessHeader' => '
   Success',
  
  'Your' => '
   Your form ',
        
        
  'Home' => 'Home'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>