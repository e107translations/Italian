<?php
if (!defined('e107_INIT')) { exit; }

$text = "Da questa pagina puoi gestire i file nella cartella /files. Se ricevi un messaggio di errore relativo ai permessi durante il caricamento, imposta i permessi (CHMOD) della cartella in cui stai tentando di caricare a 777.";
$ns -> tablerender("Aiuto Gestione File", $text);