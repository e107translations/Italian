<?php
if (!defined('e107_INIT')) { exit; }

$text = "Il File Inspector scansiona e analizza i file sul server del tuo sito. Quando incontra un file core di e107, ne verifica la coerenza per assicurarsi che non sia corrotto.";

$text .= "<br /><br />
<a href='".e_SELF."?create'>Clicca qui per creare uno snapshot dei file dei tuoi plugin da utilizzare nel File Inspector.</a>";

if ($pref['developer']) {
$text .= "<br /><br />
Gli strumenti aggiuntivi per sviluppatori (se abilitati nelle preferenze) ti permettono di generare file di checksum per i rilasci del core e dei plugin.";
}

$ns -> tablerender("Aiuto File Inspector", $text);