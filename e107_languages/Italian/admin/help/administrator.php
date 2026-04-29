<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto Amministratori del Sito";
$text = "Usa questa pagina per modificare le preferenze o eliminare gli amministratori del sito. L'amministratore avrà i permessi di accesso solo per le funzioni selezionate.<br /><br />
Per creare un nuovo amministratore, vai alla pagina di configurazione utenti e aggiorna un utente esistente allo stato di amministratore.";
$ns -> tablerender($caption, $text);