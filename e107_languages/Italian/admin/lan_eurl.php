<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Italian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2017/04/07 16:27:29
|
|        $Author: webmaster $
+---------------------------------------------------------------+
*/
define("LAN_EURL_NAME", "Gestire gli URL del sito");
define("LAN_EURL_NAME_CONFIG", "Profili");
define("LAN_EURL_NAME_ALIASES", "Alias");
define("LAN_EURL_NAME_SETTINGS", "Impostazioni generali");
define("LAN_EURL_NAME_HELP", "Guida");
define("LAN_EURL_EMPTY", "L'elenco è vuoto");
define("LAN_EURL_LEGEND_CONFIG", "Scegliere il profilo di URL per ogni area del sito");
define("LAN_EURL_LEGEND_ALIASES", "Configurare gli alias URL di Base per ogni profilo di URL");
define("LAN_EURL_DEFAULT", "Impostazione predefinita");
define("LAN_EURL_PROFILE", "Profilo");
define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Informazioni del profilo non è disponibile");
define("LAN_EURL_LOCATION", "Percorso del profilo");
define("LAN_EURL_LOCATION_NONE", "File di configurazione non è disponibile");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias quando nella lingua predefinita.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Valore predefinito è");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias di quando in");
define("LAN_EURL_FORM_HELP_EXAMPLE", "URL di base");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias '%1\$s' non può essere salvata - c'è un profilo di URL di sistema con lo stesso nome. Si prega di scegliere un altro valore di alias per il profilo di sistema URL '%2\$s'");
define("LAN_EURL_SURL_UPD", "  Gli URLs Personalizzati sono stati aggiornati");
define("LAN_EURL_SURL_NUPD", "  Gli URLs Personalizzati NON Sono stati aggiornati");
define("LAN_EURL_SETTINGS_PATHINFO", "Rimuovere il nome del file dall'URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Spazio dei nomi radice di associare");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Scegliere quale area del sito sarà collegato con il tuo URL del sito di base. Esempio: Quando la notizia è la radice dello spazio dei nomi http://yoursite.com/News-Item-Title sarà associato con notizie (pagina vista elemento sarà risolto)");
define("LAN_EURL_SETTINGS_REDIRECT", "Reindirizzare a sistema non trovato pagina");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Se impostata su falsa, non trovato pagina sarà diretto il rendering (senza redirect del browser)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Tipo di creazione automatica SEF string");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Scegliere come sarà assemblato stringa SEF quando viene automaticamente generata da un valore di titolo (ad es. in Notizie, pagine personalizzate, ecc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Basta fissarlo");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "dasherize-a-lettere minuscole");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Dasherize-a-cammello-Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Dasherize-con-no-modifica");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_to_lower_case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_To_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "Plus + separatore + a + inferiore + custodia");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus + separatore + a + borsa + Camel");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus + separatore + con + no + maiuscole + cambio");
define("LAN_EURL_MODREWR_DESCR", "Rimuove nome di voce script file (index) dall'URL. Avrai bisogno di mod_rewrite installato e in esecuzione sul server (Apache Web Server). Dopo l'attivazione di questa impostazione Vai alla cartella principale del sito, rinominare htaccess. txt in. htaccess e modifgy <em>'RewriteBase'</em> direttiva se necessario.");
define("LAN_EURL_MENU", "URL del sito");
define("LAN_EURL_MENU_CONFIG", "Profili di URL");
define("LAN_EURL_MENU_ALIASES", "Alias");
define("LAN_EURL_MENU_SETTINGS", "Impostazioni");
define("LAN_EURL_MENU_HELP", "Guida");
define("LAN_EURL_MENU_PROFILES", "Profili");
define("LAN_EURL_UC", "In costruzione");
define("LAN_EURL_CORE_MAIN", "Sito Root Namespace - alias non in uso.");
define("LAN_EURL_FRIENDLY", "Amichevole");
define("LAN_EURL_LEGACY", "URL diretto legacy.");
define("LAN_EURL_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_REWRITE_DESCR", "Search engine e user friendly URL.");
define("LAN_EURL_CORE_NEWS", "Notizie");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Completo URL brevi (nessuna prestazione e più amichevole)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Friendly URL senza ID (nessuna prestazione, più amichevole)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Viene illustrato il collegamento manuale l'analisi e l'assemblaggio.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Friendly URL con ID (prestazioni saggio)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Di seguito viene illustrato l'analisi e l'assemblaggio automatizzato di collegamento basato su regole di rotta predefinita.");
define("LAN_EURL_CORE_USER", "Utenti");
define("LAN_EURL_USER_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_USER_REWRITE_DESCR", "Search engine e user friendly URL.");
define("LAN_EURL_CORE_PAGE", "Pagine personalizzate");
define("LAN_EURL_PAGE_SEF_LABEL", "Friendly URL con ID (prestazioni)");
define("LAN_EURL_PAGE_SEF_DESCR", "Search engine e user friendly URL.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Friendly URL senza ID (nessuna prestazione, più amichevole)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Search engine e user friendly URL.");
define("LAN_EURL_CORE_SEARCH", "Ricerca");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL di ricerca predefinito");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "URL diretto legacy.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Friendly URL");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "URL di sistema predefiniti");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "Gli URL per le pagine come non trovato, accesso negato, ecc.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Sistema amichevole URL");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Gli URL per le pagine come non trovato, accesso negato, ecc.");
define("LAN_EURL_CORE_INDEX", "Prima pagina");
define("LAN_EURL_CORE_INDEX_INFO", "Su pagina non può avere un alias.");
define("LAN_EURL_REBUILD", "Ricostruisci");
define("LAN_EURL_REGULAR_EXPRESSION", "Espressine regolare");
define("LAN_EURL_KEY", "Chiave");


?>