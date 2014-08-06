    <?php function lang($phrase){static $_L = array(
  'Content' => '
   Herstellende tandheelkunde
Estetiese tandheelkunde
Mondskerms 
Implantologie
Tandbleiking
Bewuste sedasie
Pediatriese Tandheelkunde
CAD-CAM gerekenariseerde tandheelkunde (Cerec)
Wortelkanaal-behandeling     
Digitale en Panoramiese X-strale
Prostodonsie
Mondhigiene',
  
  'Header' => '
   Dienste',
  
  'Service1' => '
   Herstellende tandheelkunde',
  
  'Service10' => '
   Digitale en Panoramiese X-strale',
  
  'Service11' => '
   Prostodonsie',
  
  'Service12' => '
   Mondhigiene',
  
  'Service2' => '
   Estetiese tandheelkunde',
  
  'Service3' => '
   Mondskerms',
  
  'Service4' => '
   Implantologie',
  
  'Service5' => '
   Tandbleiking',
  
  'Service6' => '
   Bewuste sedasie',
  
  'Service7' => '
   Pediatriese Tandheelkunde',
  
  'Service8' => '
   CAD-CAM gerekenariseerde tandheelkunde (Cerec)',
  
  'Service9' => '
   Wortelkanaal-behandeling'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>