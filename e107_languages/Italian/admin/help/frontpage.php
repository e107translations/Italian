<?php
if (!defined('e107_INIT')) { exit; }

$caption = "Aiuto Pagina Iniziale";
$text = "
<p>
	Da questa schermata puoi scegliere cosa visualizzare come pagina iniziale del tuo sito; l'impostazione predefinita è news.php. Puoi anche determinare se gli utenti debbano essere indirizzati a una pagina specifica dopo il login.
</p>
<p>
	Le regole vengono cercate in ordine di priorità per trovare la prima a cui appartiene l'utente corrente (in base alla sua classe). Quella regola determinerà la pagina iniziale e l'eventuale pagina post-login. Se nessuna regola corrisponde, news.php verrà impostata come home page.
</p>
<p>
	L'utente verrà inviato alla &quot;Pagina post-login&quot; specificata (se presente) immediatamente dopo aver effettuato l'accesso.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');