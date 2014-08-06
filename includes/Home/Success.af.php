    <?php function lang($phrase){static $_L = array(
  'Appointment' => '
   afspraak',
  
  'Home' => '
   Tuis',
  
  'NewPatient' => '
   pasiënt inligting',
  
  'Submitted' => '
   was aan gestuur na ons praktyk. Ons sal binnekort vir U kontak. Baie dankie!',
  
  'SuccessHeader' => '
   Sukses',
  
  'Your' => '
   U'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>