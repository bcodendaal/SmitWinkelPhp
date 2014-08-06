    <?php function lang($phrase){static $_L = array(
  'ContactNumber' => '
   Contact Number (*)',
  
  'Content' => '
   Make an Appointment

Bold - Please complete the following fields to make an appointment. 

We will contact you shortly to confirm the time and date of your appointment.

Full Name (*)


Surname (*)


E-mail (*)


Contact Number (*)


How should we contact you?
E-mailPhone

Do you have medical aid or are you a private patient? (*)
Medical AidPrivate

When would you like to have an appointment? (*)


Reason for your appointment / any additional information?',
  
  'Email' => '
   E-mail (*)',
  
  'Email2' => '
   E-mail',
  
  'FirstName' => '
   First Names (*)',
  
  'Header' => '
   Make an Appointment',
  
  'HowShouldWeContact' => '
   How should we contact you?',
  
  'MedicalAid' => '
   Medical Aid',
  
  'MedicalAidQuestion' => '
   Do you have medical aid or are you a private patient? (*)',
  
  'Phone' => '
   Phone',
  
  'PleaseComplete' => '
   Please complete the following fields to make an appointment.',
  
  'Private' => '
   Private',
  
  'Reason' => '
   Reason for your appointment / any additional information?',
  
  'Surname' => '
   Surname (*)',
  
  'WeWillContact' => '
   We will contact you shortly to confirm the time and date of your appointment.',
  
  'When' => '
   When would you like to have an appointment? (*)'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>