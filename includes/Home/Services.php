    <?php function lang($phrase){static $_L = array(
  'Content' => '
   Restorative dentistry
Aesthetic Dentistry
Gumguards
Implantology 
Teeth whitening
Conscious sedation
Paediatric Dentistry         
CAD-CAM – computerized dentistry (Cerec)     
Root canal treatment
Digital &amp; Panoramic Radiology
Prosthodontics
Oral hygiene',
  
  'Header' => '
   Services',
  
  'Service1' => '
   Restorative dentistry',
  
  'Service10' => '
   Digital &amp; Panoramic Radiology',
  
  'Service11' => '
   Prosthodontics',
  
  'Service12' => '
   Oral hygiene',
  
  'Service2' => '
   Aesthetic Dentistry',
  
  'Service3' => '
   Gumguards',
  
  'Service4' => '
   Implantology',
  
  'Service5' => '
   Teeth whitening',
  
  'Service6' => '
   Conscious sedation',
  
  'Service7' => '
   Paediatric Dentistry',
  
  'Service8' => '
   CAD-CAM – computerized dentistry (Cerec)',
  
  'Service9' => '
   Root canal treatment'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>