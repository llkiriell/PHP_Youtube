<?php

//Requeridos
require('../src/constants.php');
require('../src/channel.class.php');

//Envío la constante para inicializar el canal
$bb = new Channel(CHANNEL_ID);

//Imprime el id del canal
//echo $bb->getChannelId();

echo '<br><pre>';
print_r($bb->getChannelListVideos());
echo '</pre>';

echo '<br><pre>';
print_r($bb->getInfoChannel());
echo '</pre>';

echo '<br><pre>';
print_r($bb->getBasicInfoOnlyVideo('dPn8-dWlRsA'));
echo '</pre>';
?>
