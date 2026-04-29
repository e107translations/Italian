<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto Log di Sistema";
if (e_QUERY) list($action,$junk) = explode('.', e_QUERY); else $action = 'list';

function common_filters()
{
  return "<b>Filtri dati</b><br />
  Puoi specificare vari filtri per limitare la quantità di dati da visualizzare. Questi vengono memorizzati in un cookie fino alla chiusura della sessione.<br />
  I filtri di data/ora di inizio e fine devono essere abilitati tramite le rispettive caselle di controllo.<br />
  Gli altri filtri sono attivi quando è presente un valore nella casella.<br />
  ";
}

switch ($action)
{
case 'auditlog' :
  $text = "Questa pagina mostra l'attività degli utenti che hai scelto di registrare.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Questa pagina configura varie opzioni per i log di sistema.<br /><br />
  <b>Impostazioni Comuni</b><br />
  Imposta il numero di righe nella visualizzazione del log.<br />
  Puoi creare una classe utente specifica per il logging. Quindi determini i tipi di attività che desideri registrare.<br />
  Gli eventi di registrazione possono essere tracciati separatamente.<br /><br />
  <b>Rolling Log</b><br />
  Questo log viene utilizzato per tracciare eventi anomali, assistere nel debugging ecc. Può essere disabilitato. Gli eventi vengono rimossi automaticamente dopo il numero di giorni impostato.
  ";
  break;
case 'rolllog' :
  $text = "Il rolling log mostra vari eventi anomali che non vengono registrati altrove. Può essere utilizzato anche per il debug del codice e il monitoraggio.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Questa pagina mostra i download effettuati dagli utenti.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Questa pagina mostra i commenti degli utenti, con opzioni di selezione per ID utente, tipo e data. I commenti indesiderati possono essere eliminati.";
  break;
case 'detailed' :
  $text = "I log principali del sistema registrano il tempo con un alto grado di precisione (se il server lo supporta), e questa pagina ti consente di ispezionare le voci che si verificano entro una finestra temporale relativamente piccola. Le voci del log amministratore, del log di audit e del rolling log vengono unite, in modo da poter vedere le relazioni precise tra gli eventi.";
  break;
case 'adminlog' :
default :
  $text = "Questa pagina mostra l'attività degli amministratori.<br /><br />
  (Al momento, il logging è ancora in fase di implementazione nel codice, quindi l'elenco non è completo.)<br /><br />";
  $text .= common_filters();
}
e107::getRender()->tablerender($caption, $text);