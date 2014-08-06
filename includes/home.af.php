    <?php
function lang($phrase){
static $_L = array(
    'WELCOME' => 'Welkom na Dr Smit Winkel',
    'ABOUT' => 'Hier by Smit en Winkel streef ons om vir U die pasient net die beste dienste te lewer.'
);

 return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase];
}
?>
