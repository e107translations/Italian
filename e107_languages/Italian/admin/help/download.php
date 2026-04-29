<?php
if (!defined('e107_INIT')) { exit; }

$text = "Per favore, carica i tuoi file nella cartella ".e_FILE."downloads, le immagini nella cartella ".e_FILE."downloadimages e le miniature nella cartella ".e_FILE."downloadthumbs.
<br /><br />
Per inserire un download, crea prima un genitore (parent), poi crea una categoria sotto quel genitore; sarai quindi in grado di rendere disponibile il download.";
$ns -> tablerender("Aiuto Download", $text);