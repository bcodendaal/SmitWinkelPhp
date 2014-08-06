    <?php function lang($phrase){static $_L = array(
  'Appointment' => '
   afspraak',
  
  'ErrorHeader' => '
   Error',
  
  'NewPatient' => '
   pasiënt besonderhede',
  
  'Sorry' => '
   Dit lyk asof iets verkeerd gegaan het terwyl U ',
  
  'ToOurPractice' => '
   na ons praktyk toe probeer stuur het. Ons vra hartlik om verskoning vir die ongemak wat veroorsaak is. Probeer asseblief weer op \'n latere stadium'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>