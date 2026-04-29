<?php
if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "I tipi di file e la dimensione massima caricabile sono impostati in base alla classe utente. Questa opzione genera un file chiamato ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		che deve essere copiato o spostato nella cartella ".e_ADMIN_ABS." e rinominato in ".e_READ_FILETYPES." prima di diventare effettivo.<br />
		È consentita una sola definizione per classe.<br />
		Nota che queste definizioni si applicano a tutto il sito, anche se la funzione di caricamento pubblico è disabilitata.";
    break;
  case 'options' :
    $text = "L'intero sistema di caricamento pubblico può essere disabilitato qui.<br />
		L'archiviazione Flatfile è generalmente appropriata (altrimenti la dimensione massima del file è limitata forzatamente a 500kb).<br />
		La dimensione massima del file sovrascrive qualsiasi definizione impostata in filetypes.xml.<br />
		I caricamenti pubblici possono essere limitati a una particolare classe utente, ma queste impostazioni si applicano anche ad altre aree del sito in cui i caricamenti possono essere consentiti, come news e moduli.";
	break;
  case 'view' :
  default :
	$text = "Questa pagina elenca tutti i caricamenti inviati. Puoi scegliere di eliminarli, trasferirli ai download o pubblicarli nelle news.";
}
$ns -> tablerender("Aiuto Caricamenti Pubblici", $text);