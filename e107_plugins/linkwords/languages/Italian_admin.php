<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2010 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Linkwords plugin - language file (only needed for admin)
 *
 */

return [
    'LWLAN_4' => "Nessuna parola collegata definita.",
    'LWLAN_5' => "Parole",
    'LWLAN_6' => "Link",
    'LWLAN_7' => "Attivo?",
    'LWLAN_21' => "Parola da collegare automaticamente (o lista di parole separate da virgola)",
    'LWLAN_26' => "Aree in cui abilitare le parole collegate",
    'LWLAN_28' => "Pagine su cui disabilitare le parole collegate",
    'LWLAN_33' => "Aree Titolo",
    'LWLAN_34' => "Riassunti elementi",
    'LWLAN_35' => "Corpo del testo",
    'LWLAN_36' => "Descrizioni (link ecc.)",
    'LWLAN_40' => "Titoli inseriti dall'utente (es. forum)",
    'LWLAN_41' => "Testo del corpo inserito dall'utente (es. forum)",
    'LWLAN_50' => "Tooltip",
    'LWLAN_52' => "ID Linkword (ID Tooltip)",
    'LWLAN_53' => "Inserisci l'ID della Linkword. Se vuoto, verrà utilizzato l'ID del database",
    'LWLAN_54' => "Abilita funzionalità Ajax",
    'LWLAN_55' => "Sopprimi link sulla pagina corrente",
    'LWLAN_56' => "Abilita/Disabilita le Linkwords",

    'LAN_LW_HELP_01' => "<b>Aree in cui abilitare le parole collegate</b><br />
  Molte aree del sito hanno diversi 'tipi' di testo. Qui puoi definire in quali tipi di testo le parole collegate saranno attive.<br /><br />

  <b>Pagine su cui disabilitare le parole collegate</b><br />
  Qui puoi definire le pagine (o pattern di pagine) su cui le parole collegate non verranno visualizzate. Inserisci un pattern per riga.<br />
  Se il pattern termina con '!', corrisponde alla 'fine della query' ed è solitamente una corrispondenza esatta. Altrimenti, qualsiasi URL contenente la stringa specificata corrisponderà.<br />
  Nota che le parole collegate non vengono <i>mai</i> visualizzate nelle pagine di amministrazione.<br /><br />

  <b>Abilita funzionalità Ajax</b><br />
  I tooltip possono utilizzare Ajax per recuperare informazioni da visualizzare. Questo solitamente richiede del codice personalizzato.<br /><br />

  <b>Sopprimi link sulla pagina corrente</b><br />
  Di solito è inutile che l'utente possa cliccare su un link se si trova già in quella pagina. Spunta questa casella per rimuovere l'opzione.<br />",

    'LAN_LW_HELP_02' => "Definisci qui le parole che diventano link cliccabili, o che visualizzano del testo al passaggio del mouse (mouseover)<br /><br />
  <b><u>Parola da collegare</u></b><br />
  Non fa distinzione tra maiuscole e minuscole. Per mappare più parole sugli stessi link e tooltip, separale con virgole (senza spazi)<br /><br />

  <b><u>Link</u></b><br />
  Definisci qui un link cliccabile. Se è un link esterno, [i]deve[/i] iniziare con 'http://'. Se è un link interno a questo sito, possono essere utilizzate le normali costanti {e_XXX}.<br /><br />

  <b><u>Tooltip</u></b><br />
  Questo definisce il testo da visualizzare quando il mouse dell'utente passa sopra la parola.<br /><br />

  <b><u>ID LW (ID Tooltip)</u></b><br /><br />
  Questo definisce un ID numerico opzionale da utilizzare con l'elaborazione Ajax. Se lasciato vuoto, viene utilizzato il numero di record del database.<br /><br />

  <b><u>Attivare?</u></b><br />
  Definisce quali linkwords sono attive.",
];