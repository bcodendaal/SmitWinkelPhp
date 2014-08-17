    <?php function lang($phrase){static $_L = array(
  'Home' => '
   Tuis',
  
  'ErrorHeader' => '
   Error',
  
  'NewPatient' => '
   pasiënt besonderhede',
  
  'Sorry' => '
   Dit lyk asof iets verkeerd gegaan het terwyl U die vorm ',
  
  'ToOurPractice' => '
   na ons praktyk toe probeer stuur het. Ons vra hartlik om verskoning vir die ongemak wat veroorsaak is. Probeer asseblief weer op \'n latere stadium'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>