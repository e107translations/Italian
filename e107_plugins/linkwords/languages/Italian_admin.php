<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Italian Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|        Last Modified: 2021/03/14 01:51:23
|
|        $Author: webmaster $
+---------------------------------------------------------------+
*/

define("LWLAN_4", "Senza parole di collegamento definite ancora.");
define("LWLAN_5", "Parole");
define("LWLAN_6", "Link");
define("LWLAN_7", "Attivo?");
define("LWLAN_21", "Parola di autolink (o elenco delimitato da virgole di parole)");
define("LWLAN_26", "Aree in cui attivare linkwords");
define("LWLAN_28", "Pagine in cui disattivare linkwords");
define("LWLAN_33", "Aree di titolo");
define("LWLAN_34", "Riepiloghi di elemento");
define("LWLAN_35", "Corpo del testo");
define("LWLAN_36", "Descrizioni (link, ecc)");
define("LWLAN_40", "Titoli immessi dall'utente (ad es. forum)");
define("LWLAN_41", "Testo immesso dall'utente corpo (ad es. forum)");
define("LWLAN_50", "ToolTip");
define("LWLAN_52", "Linkword solo");
define("LWLAN_53", "Descrizione comandi solo");
define("LWLAN_54", "Linkword e Tooltip");
define("LWLAN_55", "Apri il link in una nuova finestra");
define("LWLAN_58", "Gancio di pref convertito in formato 0,8");
define("LWLAN_59", "Attivare le funzionalità Ajax");
define("LWLAN_64", "Sopprimere il link sulla pagina corrente");
define("LWLAN_66", "Classe CSS personalizzata");
define("LWLAN_67", "Max. links/tips");
define("LAN_LW_HELP_01", "  <b>Aree per consentire</b><br>molte aree di testo hanno un \'context\ associato', e linkwords verranno visualizzate solo nelle aree in corrispondenza di tale contesto.<br><br>
  <b>LinkWords Disable</b><br>LinkWords potrebbe essere disattivato su specifiche pagine o pagine corrispondenti a un modello. Inserire questi qui (stessa sintassi di menu), uno schema per ogni riga. 
  Se il modello finisce in \ '! \', ciò corrisponde a \'end di query\', e di solito è una corrispondenza esatta. In caso contrario sarà una partita qualsiasi URL contenenti la stringa specificata.<br>Si noti che linkwords non sono <i>mai</i> visualizzate nelle pagine del admin.<br><br>
  <b>Attivare le funzionalità Ajax</b><br>Le descrizioni comandi è possono utilizzare Ajax per ottenere informazioni per la visualizzazione. Questo di solito richiede qualche codifica personalizzata.<br><br>
  <b>Sopprimere il link sulla pagina corrente</b><br>Di solito suo inutile per l'utente sia in grado di fare clic su un link se si \ ' 're già presenti nella pagina. Spuntate questa casella per rimuovere l'opzione,<br>");
define("LAN_LW_HELP_02", "Definire le parole che diventano link cliccabili, o quale visualizzare il testo su mouseover, qui<br><br>
  <b><u>Parola di collegamento</u></b><br>Si tratta di case-insensitive. Più parole mappatura al link stesso e le descrizioni comandi, separarli con virgole (senza spazi)<br><br>
  <b><u>Link</u></b><br>Definire un link cliccabile qui. Se relativo un collegamento esterno, [i] [/i] deve iniziare \'http://\'. Se è un link all'interno di questo sito, le costanti di normale {e_XXX} possono essere utilizzate.<br><br>
  <b><u>ToolTip</u></b><br>Questo definisce il testo per essere visualizzata quando l'utente s 's del mouse passa sopra la parola.<br><br>
  <b><u>LW ID (ID di Tooltip)</u></b><br><br>Questo definisce un ID numerico opzionale da utilizzare con l'Ajax di elaborazione. Se vuota, viene utilizzato il numero di record del database.<br><br>
  <b><u>Attivare?</u></b><br>Definisce quali opzioni sono attive.");
define("LAN_LW_HELP_03", "Di solito è inutile che l'utente possa fare clic su un collegamento se si trova già sulla pagina a cui si collega. Quando questa opzione è disattivata, le parole di collegamento non vengono attivate in questo caso. ");
define("LAN_LW_HELP_04", "Le linkwords possono essere disabilitate su pagine specifiche o pagine che corrispondono a uno schema. Inseriscili qui (stessa sintassi della visibilità del menu), un modello per riga. Se il pattern termina con '!', Ciò corrisponde a 'fine della query' e di solito è una corrispondenza esatta. In caso contrario, qualsiasi URL contenente la stringa specificata corrisponderà. ");
define("LAN_LW_HELP_05", "Aggiungerà questa classe a tutti i collegamenti generati. ");
define("LAN_LW_HELP_10", "Qui puoi definire le parole che diventano link cliccabili o che visualizzano il testo al passaggio del mouse. ");
define("LAN_LW_HELP_11", "Questo non fa distinzione tra maiuscole e minuscole. Per la mappatura di più parole sugli stessi link e suggerimenti, separale con virgole (senza spazi) 
");
define("LAN_LW_HELP_12", "Definisci qui un link cliccabile. Se si tratta di un collegamento esterno, DEVE iniziare con 'http (s): //'. Se è un collegamento all'interno di questo sito, è possibile utilizzare le normali costanti {e_XXX}. ");
define("LAN_LW_HELP_13", "Definisce le opzioni attive.");
define("LAN_LW_HELP_14", "Definisce il testo da visualizzare quando il mouse dell'utente passa sopra la parola. ");
define("LAN_LW_HELP_15", "Quantità massima delle stesse parole di collegamento. Deve essere un numero positivo. Utilizzato quando la stessa parola viene trovata più volte in una parte di testo. ");
define("LAN_LW_HELP_16", "Definisce un ID numerico opzionale da utilizzare con l'elaborazione Ajax. Deve essere un numero postivo. Se vuoto, viene utilizzato il numero di record del database ");
define("LAN_LW_HELP_17", "Quando attivato, il collegamento viene aperto in una nuova scheda / finestra del browser ");
