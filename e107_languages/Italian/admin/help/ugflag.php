<?php
if (!defined('e107_INIT')) { exit; }

$text = "Se stai aggiornando e107 o hai semplicemente bisogno che il tuo sito rimanga offline per un po', spunta la casella di manutenzione: i tuoi visitatori verranno reindirizzati a una pagina che spiega che il sito è chiuso per lavori. Una volta terminato, deseleziona la casella per far tornare il sito alla normalità.";

$ns -> tablerender("Manutenzione", $text);