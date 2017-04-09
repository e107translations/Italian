<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * These constants are used solely during install/uninstall - in some cases to set defaults into the database
 *
 * $Source: /cvs_backup/e107_0.8/e107_plugins/calendar_menu/languages/English_install.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */


/**
 *	e107 Event calendar plugin
 *
 *	Language file - installation
 *
 *	@package	e107_plugins
 *	@subpackage	event_calendar
 *	@version 	$Id$;
 */

// Install
define('EC_ADINST_LAN_01', "evento imminente: \n \n {EC_MAIL_CATEGORY} \n \n {} il {EC_MAIL_TITLE EC_MAIL_HEADING_DATE} {EC_MAIL_TIME_START} \n \n
{} EC_MAIL_DETAILS \n \nPer ulteriori dettagli: {EC_EVENT_LINK = clicca qui} \n \n oppure {EC_MAIL_CONTACT} per ulteriori informazioni.");
define('EC_ADINST_LAN_02', "Evento di calendario imminente: \n \n {EC_MAIL_CATEGORY} \n \n {} il {EC_MAIL_TITLE EC_MAIL_HEADING_DATE} {EC_MAIL_TIME_START} \n \n {EC_MAIL_DETAILS} \n \n
Per ulteriori dettagli si veda la voce del calendario sul sito web: \n {EC_MAIL_LINK = Clicca qui} \n \n {} EC_MAIL_CONTACT per ulteriori dettagli");
define('EC_ADINST_LAN_03', 'Categoria di Default - i messaggi in uscita vengono utilizzati se nessuno è stato definito per qualsiasi altra categoria');
define('EC_ADINST_LAN_04', 'Per attivare vai alla schermata dei menu ed inserisci il calendar_menu in una delle tue aree di menu.');
 define('EC_ADINST_LAN_05', 'Configura il Calendario Eventi');
define('EC_ADINST_LAN_06', 'Categoria di Default inserita');
define('EC_ADINST_LAN_07', 'Errore aggiunta categoria di default');
define('EC_ADINST_LAN_08', 'Categoria di Default già presente nel DB');
define('EC_ADINST_LAN_09', 'Le preferenze sono state modificate per la versione 2.0');
define('EC_ADINST_LAN_10', 'Le preferenze convertite sono pronte per la versione 2.0');
define('EC_ADINST_LAN_11', 'Le preferenze obsolete sono state rimosse dal Nucleo');
