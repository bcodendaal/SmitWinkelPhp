<?php
function lang($phrase){
static $_L = array(
    'WELCOME' => 'Welcome to Dr Smit Winkel',
    'ABOUT' => 'Here at Smit Winkel we strive to give you the best in dental health care no matter the cost!'
);

 return (!array_key_exists($phrase,$_L)) ? $phrase : $_L[$phrase];
}
?>
