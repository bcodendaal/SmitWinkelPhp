    <?php function lang($phrase){static $_L = array(
    'Header' => '
    Contact Us',
        
    'Address' => '
    2 Mountainview Drive, <br/>
    Ridgeworth,<br/>
    Bellville<br/>
    Western Cape<br/>
    7550<br/>
    South Africa',

    'Emergency' => '
     Emergencies',

    'EmergencyNumber' => '
     083 444 5922',

    'Wheelchair' => '
     Wheelchair Friendly  <br/>
     Parking On-site!',

    'Tel' => '
    Tel: <br>021 919 5559',
    'Fax' => '
    Fax: <br>021-910-0581',
        
    'WhereAreWe' => '
     Where are we?'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>