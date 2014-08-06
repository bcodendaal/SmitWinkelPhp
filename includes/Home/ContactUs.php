    <?php function lang($phrase){static $_L = array(
  'Address' => '
   2 Mountainview Drive, Bellville',
  
  'AfterHours' => '
   (after hours)',
  
  'ByAppointment' => '
   (by appointment only)',
  
  'ClickHereAppointment' => '
   Click here and complete the form to make an appointment',
  
  'ContactNumbers' => '
   Contact numbers',
  
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
   For emergencies',
  
  'EmergencyNumber' => '
   call: 083 444 5922',
  
  'Header' => '
   Contact Us',
  
  'MakeAppointment' => '
   Make an Appointment',
  
  'MondayFriday' => '
   Monday-Friday:',
  
  'MonFriTimes' => '
   7h30-17h30',
  
  'OfficeHours' => '
   Office Hours',
  
  'Parking' => '
   Parking On-site!',
  
  'SatTimes' => '
   7h30-11h30',
  
  'Saturdays' => '
   Saturdays:',
  
  'Tel' => '
   Tel: 021 919 5559',
  
  'ViewMap' => '
   View Map',
  
  'Wheelchair' => '
   Wheelchair Friendly',
  
  'WhereAreWe' => '
   Where are we?'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>