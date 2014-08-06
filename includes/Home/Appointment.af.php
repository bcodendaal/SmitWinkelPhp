    <?php
function lang($phrase){
static $_L = array(
	'Email' => 'E-pos (*)',
	'Email2' => 'E-pos',
	'FirstName' => 'Voor name (*)',
	'Header' => 'Maak \'n afspraak',
	'HowShouldWeContact' => 'Hoe moet ons u kontak?',
	'MedicalAid' => 'Mediesefonds',
	'MedicalAidQuestion' => 'Het u \'n mediesefonds of is u \'n privaat pasient? (*)',
	'Phone' => 'Foon',
	'PleaseComplete' => 'Voltooi asb die volgende vorm om \'n afspraak te maak.',
	'Private' => 'Privaat',
	'Reason' => 'Rede vir u afspraak / enige verdere inligting?',
	'Surname' => 'Van (*)',
	'WeWillContact' => 'Ons sal u binnekort kontak om die tyd en datum van u afspraak te bevestig.',
	'When' => 'Wanneer sou u graag \'n afspraak wou he? (*)'	
);

 return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase];
}
?>
