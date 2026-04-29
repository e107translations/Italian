<?php
// Nessuna stringa testuale da tradurre nel corpo del file, mantenuta la logica esistente.
$mes = e107::getMessage();
$mes->setTitle(defset('LAN_STATUS'), 'info');
echo $mes->render('default','info',false);