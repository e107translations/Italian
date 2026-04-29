<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Gestione Utenti";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Questa pagina ti permette di creare un utente, che diventerà immediatamente un membro normale del sito con le classi che gli assegnerai.<br /><br />
	Se spunti la casella 'Invia email di conferma con password al nuovo utente', il nome login e la password verranno inviati **in chiaro**, quindi l'utente dovrà cambiare la password una volta ricevuta.
	";
    break;

  case 'prune' :
	$text = "Elimina in blocco gli utenti indesiderati dal database. Possono essere quelli che non hanno completato la registrazione o quelli i cui indirizzi email sono risultati inesistenti (bounce). Eventuali post nei forum, commenti, ecc. rimarranno e saranno contrassegnati come provenienti da un 'Utente eliminato'.
	";
	break;

  case 'unverified' :
	$text = "Mostra i membri che non hanno completato la registrazione. Le opzioni sono generalmente le stesse dell'elenco membri completo.";
    break;

  case 'options' :
	$text = "Imposta varie opzioni che interessano tutti gli utenti.<br /><br />
	<b>Consenti Caricamento Avatar</b><br />
	Se abilitato, gli utenti possono caricare un avatar a loro scelta, memorizzato sul server. Ciò può avere implicazioni di sicurezza.<br /><br />
	<b>Consenti Caricamento Foto</b><br />
	Se abilitato, gli utenti possono caricare una foto a loro scelta, memorizzata sul server. Ciò può avere implicazioni di sicurezza.<br /><br />
	<b>Tracciamento Utenti Online</b><br />
	Deve essere abilitato per monitorare l'attività degli utenti, inclusi i conteggi dei membri online. Aumenta significativamente l'attività del database.<br /><br />
	<b>Informazioni Membri</b><br />
	Determina quale classe di membri può visualizzare l'elenco dei membri.
	";
    break;

  default :
	$text = "Questa pagina mostra l'elenco dei membri registrati. Puoi aggiornare le loro impostazioni, assegnare lo stato di amministratore e impostare la loro classe utente, tra le altre cose.<br /><br />

	L'ordine di visualizzazione può essere modificato cliccando sull'intestazione della colonna.<br /><br />

	<b>Classi Utente</b><br />
	Le classi possono essere impostate in due modi: 'in linea' cliccando nella colonna 'classe utente', o selezionando uno/più utenti e usando le opzioni 'operazioni in blocco' in fondo alla tabella.<br /><br />

	<b>Modifica</b><br />
	Visualizza e modifica tutte le impostazioni per questo utente.<br /><br />

	<b>Banna/Sblocca</b><br />
	Determina se l'utente può accedere al sito.<br /><br />

	<b>Attiva</b><br />
	Attiva un utente che normalmente avrebbe dovuto rispondere all'email di attivazione.<br /><br />

	<b>Reinvia Email</b><br />
	Reinvia l'email di attivazione all'utente.<br /><br />

	<b>Test email</b><br />
	Controlla la validità dell'indirizzo email dell'utente (non invia un'email).<br /><br />

	<b>Elimina</b><br />
	Rimuove totalmente l'utente dal sito (post nel forum, commenti ecc. rimangono contrassegnati come di un 'Utente eliminato').
	";
}

$ns -> tablerender($caption, $text);
unset($text);