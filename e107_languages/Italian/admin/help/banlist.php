<?php
if(!defined('e107_INIT')) { exit; }

$caption = "Bannare utenti dal sito";

if(e_QUERY) { list($action, $junk) = explode('-', e_QUERY . '-'); } else { $action = 'list'; }

switch($action)
{
	case 'transfer' :
		$text = 'Questa pagina ti permette di trasferire i dati della banlist da e verso questo sito come file CSV (Comma Separated Variable).<br /><br />';
		$text .= "<b>Esportazione Dati</b><br />
  Seleziona i tipi di ban da esportare. I campi saranno delimitati dal separatore scelto e opzionalmente racchiusi tra le virgolette selezionate.<br /><br />";
		$text .= "<b>Importazione Dati</b><br />
  Puoi scegliere se i ban importati debbano sostituire quelli esistenti o essere aggiunti all'elenco. Se i dati importati includono una data/ora di scadenza, puoi selezionare se utilizzare quella o quella predefinita del sito.";
		break;
	case 'banlog' :
		$text = "Mostra un elenco di tutti gli accessi al sito che coinvolgono un indirizzo presente nella ban list o nella white list. La colonna 'motivo' mostra l'esito.";
		break;
	case 'white' :
		$text = "Questa pagina mostra un elenco di tutti gli indirizzi IP e indirizzi email esplicitamente consentiti.<br />
    Questo elenco ha la priorità sulla ban list - non dovrebbe essere possibile bannare un indirizzo presente in questa lista.<br />
	Tutti gli indirizzi devono essere inseriti manualmente.";
		break;
	case 'list' :
	default :
		$text = 'Questa pagina mostra un elenco di tutti gli indirizzi IP, nomi host e indirizzi email bannati. 
(Gli utenti bannati sono mostrati nella pagina di amministrazione utenti)<br /><br />
<b>Ban Automatici</b><br />
e107 banna automaticamente i singoli indirizzi IP se tentano di inondare il sito (flooding), così come gli indirizzi con accessi falliti.<br />
Questi ban appaiono anche in questo elenco. Puoi selezionare (nella pagina delle opzioni) cosa fare per ogni tipo di ban.<br /><br />
<b>Rimoziore un ban</b><br />
Puoi impostare un periodo di scadenza per ogni tipo di ban; in tal caso la voce viene rimossa alla scadenza. Altrimenti il ban rimane fino alla rimozione manuale.<br />
Puoi modificare il periodo di ban da questa pagina - i tempi sono calcolati a partire da adesso.';
}
e107::getRender()->tablerender($caption, $text);