    <?php function lang($phrase){static $_L = array(
  'Home' => '
   Home',
  
  'ErrorHeader' => '
   Error',
  
  'NewPatient' => '
   patient details',
  
  'Sorry' => '
   Something seems to have gone wrong while submitting your form ',
  
  'ToOurPractice' => '
   to our practice. We sincerely apologise for the inconvenience caused. Please try again later'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>