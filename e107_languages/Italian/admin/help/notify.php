<?php
if (!defined('e107_INIT')) { exit; }

$text = "Il sistema di Notifica invia email quando si verificano determinati eventi su e107.<br /><br />
Ad esempio, imposta 'IP bannato per flooding' sulla classe utente 'Admin' e tutti gli amministratori riceveranno una mail quando il sito subisce un attacco flooding.<br /><br />
Puoi anche impostare 'News pubblicata da admin' sulla classe 'Membri' e tutti i tuoi utenti riceveranno via mail le news che pubblichi sul sito.<br /><br />
Se desideri che le notifiche vengano inviate a un indirizzo alternativo, seleziona l'opzione 'Email' e inserisci l'indirizzo nel campo fornito.";

$ns -> tablerender("Aiuto Notifiche", $text);