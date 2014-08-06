    <?php function lang($phrase){static $_L = array(
  'Address' => '
   2 Mountainview-rylaan, Bellville',
  
  'AfterHours' => '
   (na-ure)',
  
  'ByAppointment' => '
   (slegs met afspraak)',
  
  'ClickHereAppointment' => '
   Kliek hier en voltooi die vorm as jy \'n afspraak wil maak.',
  
  'ContactNumbers' => '
   Kontaknommers',
  
  'Content' => '
   Make an Appointment
Click here and complete the form to make an appointment
Office Hours
Monday-Friday:
7h30-17h30

Saturdays: 
(by appointment only) 
7h30-11h30
Contact numbers
Tel: 021 919 5559
For emergencies 
call: 083 444 5922     
(after hours)

Where are we?
2 Mountainview Drive, Bellville 
 

View Map

  
Wheelchair Friendly

Parking On-site!',
  
  'Emergency' => '
   Noodgevalle',
  
  'EmergencyNumber' => '
   skakel: 083 444 5922',
  
  'Header' => '
   Contact Us',
  
  'MakeAppointment' => '
   Maak \'n afspraak',
  
  'MondayFriday' => '
   Maandag-Vrydag:',
  
  'MonFriTimes' => '
   7h30-17h30',
  
  'OfficeHours' => '
   Kantoorure',
  
  'Parking' => '
   Parkering by spreekkamers beskikbaar.',
  
  'SatTimes' => '
   7h30-11h30',
  
  'Saturdays' => '
   Saterdae:',
  
  'Tel' => '
   Tel: 021 919 5559',
  
  'ViewMap' => '
   Sien Padkaart',
  
  'Wheelchair' => '
   Rolstoel vriendelik',
  
  'WhereAreWe' => '
   Waar is ons praktyk?'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>