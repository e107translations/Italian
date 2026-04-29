<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto Classi Utente";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Imposta le classi a cui un nuovo membro del sito viene assegnato inizialmente. 
	Se hai abilitato la verifica, l'assegnazione può avvenire al momento dell'iscrizione o della verifica.<br /><br />
	Ricorda che se stai usando classi utente gerarchiche, un utente è automaticamente membro di tutte le classi 'superiori' rispetto a ciascuna classe selezionata nell'albero.";
	break;
  case 'options' :
	$text = "Le opzioni di configurazione consentono di creare e rimuovere la gerarchia delle classi predefinita. Puoi vedere l'effetto osservando l'albero degli utenti.<br />
	Questo non distruggerà le altre informazioni sulle classi; potrai modificare o rimuovere la gerarchia in seguito.<br /><br />
	Dovresti ricostruire la gerarchia delle classi solo in caso di corruzione del database.";
	break;
  case 'membs' :
    $text = "Ora nella pagina di amministrazione utenti.";
	break;
  case 'debug' :
	$text = "Solo per utenti avanzati - mostra la gerarchia delle classi, le classi assegnate e le classi a cui hanno accesso i primi 20 membri del sito.<br />
	Il numero davanti al nome della classe è il suo ID univoco. La classe 'Tutti' ha ID 0 (zero). e107 usa questi ID per riferirsi alle classi.<br />
	Dopo il nome della classe è indicata la visibilità e la possibilità di modifica - ad esempio [vis:253, edit: 27]. Ciò significa che la classe sarà visibile nella maggior parte dei selettori solo se l'utente corrente è membro della classe 253, e potrà modificare la propria appartenenza solo se è membro della classe 27.<br />
	Infine, dopo il simbolo '=', c'è l'elenco di tutte le classi sopra o sotto ogni classe nell'albero, più l'ID di quella classe. Quindi un utente membro di una classe specifica sarà membro di tutte le classi in questo elenco.<br /><br />
	Per facilitare la comprensione, viene mostrata l'appartenenza dei primi 20 membri. La prima voce su ogni riga mostra le classi di cui l'utente è membro. La seconda elenca tutte le classi di cui è membro una volta applicata l'ereditarietà. La terza mostra quali appartenenze può modificare.";
	break;
  case 'test' :
  case 'special' :
    $text = "Non usare questo!!! Solo per gli sviluppatori!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Puoi creare nuove classi o modificare quelle esistenti da questa pagina.<br />
         È utile per limitare l'accesso degli utenti a determinate parti del sito. Ad esempio, potresti creare una classe chiamata TEST e poi un forum accessibile solo agli utenti della classe TEST.<br /><br />
		 Il nome della classe viene visualizzato negli elenchi a discesa; in alcuni punti viene mostrata anche la descrizione dettagliata.<br /><br />
		 L'icona della classe può essere visualizzata in vari punti del sito, se impostata.<br /><br />
		 Per consentire agli utenti di decidere se essere membri di una classe, permetti loro di gestirla. Se imposti 'nessuno', solo gli amministratori potranno gestirne l'appartenenza.<br /><br />
		 Il campo 'visibilità' ti permette di nascondere la classe alla maggior parte dei membri (si applica in alcuni elenchi a discesa e caselle di controllo).<br /><br />
		 La 'classe genitore' permette di impostare una gerarchia. Se il vertice è la classe 'Tutti/Pubblico' o 'Membro', le classi sottostanti avranno anche i diritti della classe genitore e così via. Se il vertice è 'Nessuno', i diritti vengono accumulati in direzione opposta: una classe accumula i diritti delle classi **sottostanti**. L'albero risultante è mostrato in fondo alla pagina; puoi espandere o comprimere i rami cliccando sui simboli '+' e '-'.";
	break;
  case 'display' :
  default :
	$text = "Da questa pagina puoi selezionare le classi da modificare ed eliminare quelle esistenti.";
}
e107::getRender() -> tablerender($caption, $text);