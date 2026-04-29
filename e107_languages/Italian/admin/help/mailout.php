<?php
if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();
$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = 'Invia mail con vincoli specificati da un plugin opzionale';
	  break;
	case 'debug' :
	  $text = 'Solo per sviluppatori. Non utilizzato al momento';
	  break;
	case 'saved' :
	  $text = 'Seleziona e usa un modello di email salvato per un invio massivo. Elimina i modelli non più necessari';
	  break;
	case 'pending' :
		$text = 'Elenco degli invii pianificati, insieme allo stato corrente. L\'attività di pianificazione mail processerà queste email in base alle date di inizio e fine impostate';
		break;
	case 'held' :
		$text = 'Elenco delle email preparate per l\'invio, ma non ancora rilasciate';
		break;
	case 'sent' :
	  $text = 'Elenco degli invii completati. Ti permette di vedere i risultati della spedizione.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	  $text = '<b>Invio Mail</b><br />Qui puoi comporre un\'email da inviare a una classe specifica di utenti. Puoi anche specificare parametri per invii dilazionati, per evitare di sovraccaricare il server o superare i limiti dell\'hoster.<br /><br />';
	  $text .= '<b>Configurazione</b><br />Puoi impostare il metodo di invio (PHP, Sendmail, SMTP) e regolare la velocità degli invii; è possibile impostare tutti i valori a zero per svuotare la coda quasi istantaneamente. In genere è consigliabile inviare meno di 500 email l\'ora.<br /><br />';
	  $text .= '<b>Email Rimbalzate (Bounced)</b><br />Puoi specificare un indirizzo email per ricevere le mancate consegne. Se hai il controllo del server, puoi usare uno script di auto-elaborazione; altrimenti specifica un account POP3 separato da controllare periodicamente o manualmente.<br /><br />';
	  $text .= "<b>Sorgenti Indirizzi Email</b><br />Se hai plugin aggiuntivi per le mail, puoi selezionare quali di essi possono contribuire con indirizzi alla lista.<br /><br />";
	  $text .= "<b>Log</b><br />L'opzione di log crea un file di testo nella directory log di sistema. Deve essere rimosso periodicamente. L'opzione 'solo log' ti permette di vedere esattamente chi riceverebbe le mail senza inviarle davvero.";
	  break;
	 case 'maint' :
		$text = 'Funzioni di manutenzione per il database delle mail';
		break;
	default :
	  $text = 'Opzione non documentata';
  }

e107::getRender()->tablerender('Aiuto Mail', $text);