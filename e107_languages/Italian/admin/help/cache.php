<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Caching";
$text = "Se hai la cache attivata, la velocità del tuo sito migliorerà notevolmente e il numero di chiamate al database SQL sarà ridotto al minimo.<br /><br /><b>IMPORTANTE! Se stai creando il tuo tema, disattiva la cache, altrimenti le modifiche apportate non saranno riflesse immediatamente.</b>";
$ns -> tablerender($caption, $text);