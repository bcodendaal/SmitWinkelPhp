    <?php function lang($phrase){static $_L = array(
  'Content' => '
   New Patients are welcome at all times. Please feel free to contact us with any queries or make an appointment.

SAVE SOME TIME :: If you\'ll be visiting us for the first time please complete the form below to minimize administration on your arrival at our Practice.',
  
  'Form' => '
   New Patient Information Form',
  
  'Header' => '
   New Patients',
  
  'NewPatientPara1' => '
   New Patients are welcome at all times. Please feel free to contact us with any queries or make an appointment.',
  
  'NewPatientPara2' => '
   SAVE SOME TIME :: If you\'ll be visiting us for the first time please complete the form below to minimize administration on your arrival at our Practice.'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>