    <?php function lang($phrase){static $_L = array(
  'AIDS' => '
   AIDS',
  
  'Allergies' => '
   Any allergies?',
  
  'Astma' => '
   Astma',
  
  'Bleeding' => '
   Any bleeding tendencies or porphyria in family?',
  
  'CellNumber' => '
   Cell nr (*)',
  
  'Content' => '
   Patient Information Sheet
PERSON RESPONSIBLE FOR ACCOUNT.
Title	
Initials (*)	
Surname (*)	
Physical Address	
Postal Address	
Home nr	
Work nr	
Cell nr (*)	
Medical Aid	
Medical Number	
ID number	
Occupation	
Employer	
E-mail (*)	
Nearest Family/Friend name	
(not from same address)
Relationship	
(not from same address)
Next



PLEASE SUPPLY THE FOLLOWING INFORMATION ABOUT THE PATIENT.
Patient Surname	
Full name	
Date of birth	
Patient ID number	
Patient Occupation	
Company	
Home language	
Marital status	
Home nr	
Work nr	
Cell nr	
Patient Medical Dependant Number	


	Have you had any of the following diseases?
Rheumatic fever	
Coronary Trombosis or cardiac disease	
Hypertension	
Diabetes	
Kidney disease	
Hepatitus	
AIDS	
Astma	
Any allergies?	
Any bleeding tendencies or porphyria in family?	
If female, are you pregnant?	
Other	
Are you using any medication?	
Do you smoke?	
Do you take treatment for Osteoporosis?',
  
  'CoronaryTrombosis' => '
   Coronary Trombosis or cardiac disease',
  
  'Diabetes' => '
   Diabetes',
  
  'Email' => '
   E-mail (*)',
  
  'Employer' => '
   Employer',
        
         'FamilyAddress' => '
   Address',
        
         'FamilyCode' => 'Code',
        
         'FamilyPhone' => '
   Phone Number',
        
         'FamilyCell' => '
   CellNumber',
        
         'RecommendedBy' => '
   Recommended By',        
        
  'Header' => '
   Patient Information Sheet',
  
  'Hepatitus' => '
   Hepatitus',
  
  'HomeNumber' => '
   Home nr',
  
  'Hypertension' => '
   Hypertension',
  
  'IDNumber' => '
   ID number',
  
  'Initials' => '
   Initials (*)',
  
  'KidneyDisease' => '
   Kidney disease',
  
  'MedicalAid' => '
   Medical Aid',
  
  'MedicalAidNumber' => '
   Medical Number',
  
  'Medication' => '
   Are you using any medication?',
  
  'NearestFamily' => '
   Nearest Family/Friend name',
  
  'Next' => '
   Next',
  
  'NotFromSameAddress' => '
   (not from same address)',
  
  'Occupation' => '
   Occupation',
  
  'Osteoporosis' => '
   Do you take treatment for Osteoporosis?',
  
  'Other' => '
   Other',
  
  'PatientCellNumber' => '
   Patient Cell Number',
  
  'PatientCompany' => '
   Patient Company',
  
  'PatientDateOfBirth' => '
   Patient Date of Birth',
  
  'PatientFullName' => '
   Patient Full Name',
  
  'PatientHomeLanguage' => '
   Patient Home Language',
  
  'PatientHomeNumber' => '
   Patient Home Number',
  
  'PatientIDNumber' => '
   Patient ID Number',
  
  'PatientMaritalStatus' => '
   Patient Marital Status',
  
  'PatientMedicalDependantNumber' => '
   Patient Medical Dependant Number',
  
  'PatientOccupation' => '
   Patient Occupation',
  
  'PatientSurname' => '
   Patient Surname',
  
  'PatientWorkNumber' => '
   Patient Work Number',
  
  'PhysicalAddress' => '
   Physical Address',
  
  'PostalAddress' => '
   Postal Address',
  
  'Pregnant' => '
   If female, are you pregnant?',
  
  'Relationship' => '
   Relationship',
  
  'Rheumatic' => '
   Rheumatic fever',
  
  'Smoke' => '
   Do you smoke?',
  
  'SubHeader1' => '
   PERSON RESPONSIBLE FOR ACCOUNT.',
  
  'SubHeader2' => '
   PLEASE SUPPLY THE FOLLOWING INFORMATION ABOUT THE PATIENT.',
  
  'SubHeader3' => '
   Have you had any of the following diseases?',
  
  'Surname' => '
   Surname (*)',
  
  'Title' => '
   Title',
  
  'WorkNumber' => '
   Work nr',
        
        'Next' => 'Next',
        'Previous' => 'Previous'
  
);return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase]; }?>