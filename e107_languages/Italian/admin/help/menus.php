<?php
if(!defined('e107_INIT')){ exit; }

// ... (logica di controllo permessi e reset SQL lasciata invariata) ...

if(isset($_POST['reset']))
{
    // ... logica reset ...
    $text = "<b>Menu resettati nel database</b><br /><br />";
}
else
{
	unset($text);
}

$text .= "Il Gestore Menu ti consente di posizionare e organizzare i tuoi menu all'interno del template del tuo tema. 

Passa il mouse sopra le sotto-aree per modificare le impostazioni di visibilità di un menu o per visualizzare/nascondere un'anteprima del menu (se disponibile). 
Trascina e rilascia (Drag and Drop) i menu per riorganizzarli o spostarli in diverse aree del template.";

$ns -> tablerender("Aiuto Gestore Menu", $text);