<?php

<<<<<<< HEAD
return array (
  'resource' => 
  array (
    'name' => 'Template Email',
    'plural' => 'Template Email',
  ),
  'navigation' => 
  array (
    'name' => 'Template Email',
    'plural' => 'Template Email',
    'group' => 
    array (
      'name' => 'Notifiche',
      'description' => 'Gestione delle notifiche email e dei relativi template',
    ),
    'label' => 'Template Email',
    'icon' => 'heroicon-o-envelope',
    'sort' => 1,
  ),
  'sections' => 
  array (
=======
return  [
  'resource' => 
   [
    'name' => 'Template Email',
    'plural' => 'Template Email',
  ],
  'navigation' => 
   [
    'name' => 'Template Email',
    'plural' => 'Template Email',
    'group' => 
     [
      'name' => 'Notifiche',
      'description' => 'Gestione delle notifiche email e dei relativi template',
    ],
    'label' => 'Template Email',
    'icon' => 'heroicon-o-envelope',
    'sort' => 1,
  ],
  'sections' => 
   [
>>>>>>> 3c0d88c (.)
    'main' => 'Informazioni Principali',
    'content' => 'Contenuto',
    'styling' => 'Stile',
    'settings' => 'Impostazioni',
    'variables' => 'Variabili',
<<<<<<< HEAD
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'helper_text' => 'Identificativo univoco del template',
    ),
    'mailable' => 
    array (
=======
  ],
  'fields' => 
   [
    'id' => 
     [
      'label' => 'ID',
      'helper_text' => 'Identificativo univoco del template',
    ],
    'mailable' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Classe Mailable',
      'helper_text' => 'Classe PHP che gestisce l\'invio dell\'email',
      'placeholder' => 'es: App\\Mail\\WelcomeEmail',
      'description' => 'mailable',
<<<<<<< HEAD
    ),
    'subject' => 
    array (
=======
    ],
    'subject' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Oggetto',
      'helper_text' => 'Oggetto dell\'email',
      'placeholder' => 'Inserisci l\'oggetto dell\'email',
      'description' => 'subject',
<<<<<<< HEAD
    ),
    'html_template' => 
    array (
=======
    ],
    'html_template' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Template HTML',
      'helper_text' => 'Contenuto HTML del template email',
      'placeholder' => 'Inserisci il codice HTML',
      'description' => 'html_template',
<<<<<<< HEAD
    ),
    'text_template' => 
    array (
=======
    ],
    'text_template' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Template Testo',
      'helper_text' => 'Versione testuale del template email',
      'placeholder' => 'Inserisci la versione testuale',
      'description' => 'text_template',
<<<<<<< HEAD
    ),
    'from_email' => 
    array (
      'label' => 'Email mittente',
      'helper_text' => 'Indirizzo email del mittente',
      'placeholder' => 'noreply@example.com',
    ),
    'from_name' => 
    array (
      'label' => 'Nome mittente',
      'helper_text' => 'Nome visualizzato del mittente',
      'placeholder' => 'Nome Azienda',
    ),
    'variables' => 
    array (
      'label' => 'Variabili disponibili',
      'helper_text' => 'Elenco delle variabili che possono essere utilizzate nel template',
      'placeholder' => 'es: {{name}}, {{email}}',
    ),
    'is_markdown' => 
    array (
      'label' => 'Usa Markdown',
      'helper_text' => 'Indica se il template utilizza la sintassi Markdown',
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'helper_text' => 'Stato attuale del template',
    ),
    'created_at' => 
    array (
      'label' => 'Data creazione',
      'helper_text' => 'Data di creazione del template',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima modifica',
      'helper_text' => 'Data dell\'ultima modifica del template',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'layout' => 
    array (
      'label' => 'layout',
    ),
    'slug' => 
    array (
=======
    ],
    'from_email' => 
     [
      'label' => 'Email mittente',
      'helper_text' => 'Indirizzo email del mittente',
      'placeholder' => 'noreply@example.com',
    ],
    'from_name' => 
     [
      'label' => 'Nome mittente',
      'helper_text' => 'Nome visualizzato del mittente',
      'placeholder' => 'Nome Azienda',
    ],
    'variables' => 
     [
      'label' => 'Variabili disponibili',
      'helper_text' => 'Elenco delle variabili che possono essere utilizzate nel template',
      'placeholder' => 'es: {{name}}, {{email}}',
    ],
    'is_markdown' => 
     [
      'label' => 'Usa Markdown',
      'helper_text' => 'Indica se il template utilizza la sintassi Markdown',
    ],
    'status' => 
     [
      'label' => 'Stato',
      'helper_text' => 'Stato attuale del template',
    ],
    'created_at' => 
     [
      'label' => 'Data creazione',
      'helper_text' => 'Data di creazione del template',
    ],
    'updated_at' => 
     [
      'label' => 'Ultima modifica',
      'helper_text' => 'Data dell\'ultima modifica del template',
    ],
    'toggleColumns' => 
     [
      'label' => 'toggleColumns',
    ],
    'reorderRecords' => 
     [
      'label' => 'reorderRecords',
    ],
    'resetFilters' => 
     [
      'label' => 'resetFilters',
    ],
    'applyFilters' => 
     [
      'label' => 'applyFilters',
    ],
    'openFilters' => 
     [
      'label' => 'openFilters',
    ],
    'layout' => 
     [
      'label' => 'layout',
    ],
    'slug' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'slug',
      'description' => 'slug',
      'helper_text' => 'slug',
      'placeholder' => 'slug',
<<<<<<< HEAD
    ),
    'name' => 
    array (
=======
    ],
    'name' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'Nome del template',
      'helper_text' => 'Nome descrittivo per identificare il template',
      'placeholder' => 'Es: Benvenuto, Conferma ordine, Reset password',
      'label' => 'Nome Template',
<<<<<<< HEAD
    ),
    'params' => 
    array (
=======
    ],
    'params' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Parametri',
      'helper_text' => 'Inserisci i parametri separati da virgola che possono essere utilizzati nel template',
      'placeholder' => 'name, email, date, company',
      'description' => 'Parametri disponibili per il template email',
<<<<<<< HEAD
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'sms_template' => 
    array (
=======
    ],
    'delete' => 
     [
      'label' => 'delete',
    ],
    'sms_template' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'sms_template',
      'helper_text' => 'sms_template',
      'placeholder' => 'sms_template',
      'label' => 'sms_template',
<<<<<<< HEAD
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
    'counter' => 
    array (
      'label' => 'counter',
    ),
  ),
  'actions' => 
  array (
    'preview' => 
    array (
=======
    ],
    'edit' => 
     [
      'label' => 'edit',
    ],
    'view' => 
     [
      'label' => 'view',
    ],
    'create' => 
     [
      'label' => 'create',
    ],
    'counter' => 
     [
      'label' => 'counter',
    ],
  ],
  'actions' => 
   [
    'preview' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Anteprima',
      'tooltip' => 'Visualizza anteprima dell\'email',
      'success_message' => 'Anteprima generata con successo',
      'error_message' => 'Errore nella generazione dell\'anteprima',
<<<<<<< HEAD
    ),
    'test' => 
    array (
=======
    ],
    'test' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Invia test',
      'tooltip' => 'Invia un\'email di test',
      'success_message' => 'Email di test inviata con successo',
      'error_message' => 'Errore nell\'invio dell\'email di test',
<<<<<<< HEAD
    ),
    'duplicate' => 
    array (
=======
    ],
    'duplicate' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Duplica',
      'tooltip' => 'Crea una copia del template',
      'success_message' => 'Template duplicato con successo',
      'error_message' => 'Errore nella duplicazione del template',
<<<<<<< HEAD
    ),
    'export' => 
    array (
=======
    ],
    'export' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Esporta',
      'tooltip' => 'Esporta il template in formato JSON',
      'success_message' => 'Template esportato con successo',
      'error_message' => 'Errore nell\'esportazione del template',
<<<<<<< HEAD
    ),
    'import' => 
    array (
=======
    ],
    'import' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Importa',
      'tooltip' => 'Importa un template da un file JSON',
      'success_message' => 'Template importato con successo',
      'error_message' => 'Errore nell\'importazione del template',
<<<<<<< HEAD
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
  ),
  'messages' => 
  array (
=======
    ],
    'activeLocale' => 
     [
      'label' => 'activeLocale',
    ],
  ],
  'messages' => 
   [
>>>>>>> 3c0d88c (.)
    'success' => 'Operazione completata con successo',
    'error' => 'Si è verificato un errore durante l\'operazione',
    'confirmation' => 'Sei sicuro di voler procedere con questa operazione?',
    'template_created' => 'Il template email è stato creato con successo',
    'template_updated' => 'Il template email è stato aggiornato con successo',
    'template_deleted' => 'Il template email è stato eliminato con successo',
<<<<<<< HEAD
  ),
  'status' => 
  array (
=======
  ],
  'status' => 
   [
>>>>>>> 3c0d88c (.)
    'sent' => 'Inviata',
    'delivered' => 'Consegnata',
    'failed' => 'Fallita',
    'opened' => 'Aperta',
    'clicked' => 'Cliccata',
    'bounced' => 'Respinta',
    'spam' => 'Segnalata come spam',
<<<<<<< HEAD
  ),
  'model' => 
  array (
    'label' => 'mail template.model',
  ),
);
=======
  ],
  'model' => 
   [
    'label' => 'mail template.model',
  ],
];
>>>>>>> 3c0d88c (.)
