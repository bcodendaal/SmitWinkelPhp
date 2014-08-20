    <?php function lang($phrase){static $_L = array(
'Header' => '
Kontak Ons',

'ContactNumbers' => '
Kontaknommers',

'Address' => '
2 Mountainview Drive, <br/>
Ridgeworth,<br/>
Bellville<br/>
Western Cape<br/>
7550<br/>
South Africa',

'Wheelchair' => '
Rolstoel vriendelik<br/>
Parkering op perseel!',
        
'Tel' => '
Tel: <br>021 919 5559',
'Fax' => '
Faks: <br>021-910-0581',
        
'WhereAreWe' => '
Waar is ons praktyk?'  

);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>