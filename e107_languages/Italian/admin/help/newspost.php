<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto News";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>Generale</b><br />Il corpo (body) verrà visualizzato nella pagina principale; il testo esteso sarà leggibile cliccando sul link 'Leggi tutto'.
<br /><br />
<b>Mostra solo il titolo</b><br />Abilita questa opzione per mostrare solo il titolo della news in home page, con un link cliccabile alla storia completa.
<br /><br />
<b>Attivazione</b><br />Se imposti una data di inizio e/o fine, la news verrà visualizzata solo tra queste date.
";
	break;
  case 'cat' :
	$text = "Puoi separare le news in diverse categorie e consentire ai visitatori di visualizzare solo gli elementi di tali categorie. <br /><br />Carica le icone delle categorie in \".e_THEME.\"-tuotema-/images/ o in themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Imposta varie opzioni relative alle news<br /><br />
	<b>Colonne Categorie News</b><br />Richiede il supporto del tema per essere selezionabile.<br /><br />
	<b>News da visualizzare per pagina</b><br />Per la pagina principale delle news.<br /><br />
	<b>News da visualizzare in archivio</b><br />Imposta il numero di news visualizzate come solo titolo su ogni pagina (incluse nel totale precedente).<br /><br />
	<b>Abilita editor WYSIWYG</b><br />Richiede che gli utenti che possono inviare news possano anche pubblicare codice HTML.
	';
	break;
  case 'list' :
  default :
	$text = "Elenco di tutte le news. Per modificare o eliminare, clicca sull'icona corrispondente.";
}
$ns -> tablerender($caption, $text);