    <?php function lang($phrase){static $_L = array(
  'Content' => '
   Nuwe Pasiente is altyd welkom. Kontak ons gerus met enige navrae en maak \'n afspraak. 

SPAAR \'n BIETJIE TYD :: As u ons praktyk vir die eerste keer gaan besoek, vul solank hierdie vorm aanlyn in.',
  
  'Form' => '
   Nuwe Pasiënt Inligting Vorm',
  
  'Header' => '
   Nuwe Pasiënte',
  
  'NewPatientPara1' => '
   Nuwe pasiënt is altyd welkom. Kontak ons gerus met enige navrae en maak \'n afspraak.',
  
  'NewPatientPara2' => '
   SPAAR \'n BIETJIE TYD :: As u ons praktyk vir die eerste keer gaan besoek, vul solank hierdie vorm aanlyn in.'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>