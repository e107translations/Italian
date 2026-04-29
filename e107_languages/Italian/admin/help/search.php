<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto Ricerca";
$text = "
	Se la versione del tuo server MySQL lo supporta, puoi passare al metodo di ordinamento MySQL, che è più veloce del metodo PHP. Vedi le preferenze.
<br /><br />
	Se il tuo sito include lingue ideografiche come il cinese e il giapponese, devi utilizzare il metodo di ordinamento PHP e disattivare la corrispondenza per parole intere.
";
$ns->tablerender($caption, $text);