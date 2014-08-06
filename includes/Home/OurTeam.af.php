    <?php function lang($phrase){static $_L = array(
  'AuxilaryStaff1' => '
   Adele Lambrechts',
  
  'AuxilaryStaff2' => '
   Melanie du Plessis',
  
  'AuxilaryStaff3' => '
   Joléne Potgieter',
  
  'AuxilaryStaff4' => '
   Elizabeth Williams',
  
  'AuxilaryStaff5' => '
   Michelle Jejane',
  
  'AuxilaryStaffSubHeader' => '
   Aanvullende Personeel:',
  
  'Content' => '
   Tandartse:
Dr Johan Smit
Dr Richard Winkel
Dr Finnie Kelly
Dr Annetjie Smith
Mondhigiëniste:
Christel Visagie
Rozanne Marais
Ontvangs en Administrasie
Jackie Kapp
Sharon Sprong
Christelle Smit
Aanvullende Personeel
Adele Lambrechts
Melanie du Plessis
Joléne Potgieter
Elizabeth Williams
Michelle Jejane',
  
  'Dentist1' => '
   Dr Johan Smit',
  
  'Dentist2' => '
   Dr Richard Winkel',
  
  'Dentist3' => '
   Dr Finnie Kelly',
  
  'Dentist4' => '
   Dr Annetjie Smith',
  
  'DentistsSubHeader' => '
   Tandartse:',
  
  'Header' => '
   Ons Personeel',
  
  'OralHygienist1' => '
   Christel Visagie',
  
  'OralHygienist2' => '
   Rozanne Marais',
  
  'OralHygienistSubHeader' => '
   Mondhigiëniste:',
  
  'ReceptionAdmin1' => '
   Jackie Kapp',
  
  'ReceptionAdmin2' => '
   Sharon Sprong',
  
  'ReceptionAdmin3' => '
   Christelle Smit',
  
  'ReceptionAdminSubHeader' => '
   Ontvangs en Administrasie:'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>