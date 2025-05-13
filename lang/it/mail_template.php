<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Template Email',
        'plural' => 'Template Email',
    ],
    'navigation' => [
        'name' => 'Template Email',
        'plural' => 'Template Email',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione delle notifiche email e dei relativi template',
        ],
        'label' => 'Template Email',
        'icon' => 'heroicon-o-envelope',
        'sort' => 1,
    ],
    'sections' => [
        'main' => 'Informazioni Principali',
        'content' => 'Contenuto',
        'styling' => 'Stile',
        'settings' => 'Impostazioni',
        'variables' => 'Variabili',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'helper_text' => 'Identificativo univoco del template',
        ],
        'mailable' => [
            'label' => 'Classe Mailable',
            'helper_text' => 'Classe PHP che gestisce l\'invio dell\'email',
            'placeholder' => 'es: App\\Mail\\WelcomeEmail',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'helper_text' => 'Oggetto dell\'email',
            'placeholder' => 'Inserisci l\'oggetto dell\'email',
        ],
        'html_template' => [
            'label' => 'Template HTML',
            'helper_text' => 'Contenuto HTML del template email',
            'placeholder' => 'Inserisci il codice HTML',
        ],
        'text_template' => [
            'label' => 'Template Testo',
            'helper_text' => 'Versione testuale del template email',
            'placeholder' => 'Inserisci la versione testuale',
        ],
        'from_email' => [
            'label' => 'Email mittente',
            'helper_text' => 'Indirizzo email del mittente',
            'placeholder' => 'noreply@example.com',
        ],
        'from_name' => [
            'label' => 'Nome mittente',
            'helper_text' => 'Nome visualizzato del mittente',
            'placeholder' => 'Nome Azienda',
        ],
        'variables' => [
            'label' => 'Variabili disponibili',
            'helper_text' => 'Elenco delle variabili che possono essere utilizzate nel template',
            'placeholder' => 'es: {{name}}, {{email}}',
        ],
        'is_markdown' => [
            'label' => 'Usa Markdown',
            'helper_text' => 'Indica se il template utilizza la sintassi Markdown',
        ],
        'status' => [
            'label' => 'Stato',
            'helper_text' => 'Stato attuale del template',
        ],
        'created_at' => [
            'label' => 'Data creazione',
            'helper_text' => 'Data di creazione del template',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
            'helper_text' => 'Data dell\'ultima modifica del template',
        ],
    ],
    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza anteprima dell\'email',
            'success_message' => 'Anteprima generata con successo',
            'error_message' => 'Errore nella generazione dell\'anteprima',
        ],
        'test' => [
            'label' => 'Invia test',
            'tooltip' => 'Invia un\'email di test',
            'success_message' => 'Email di test inviata con successo',
            'error_message' => 'Errore nell\'invio dell\'email di test',
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'tooltip' => 'Crea una copia del template',
            'success_message' => 'Template duplicato con successo',
            'error_message' => 'Errore nella duplicazione del template',
        ],
        'export' => [
            'label' => 'Esporta',
            'tooltip' => 'Esporta il template in formato JSON',
            'success_message' => 'Template esportato con successo',
            'error_message' => 'Errore nell\'esportazione del template',
        ],
        'import' => [
            'label' => 'Importa',
            'tooltip' => 'Importa un template da un file JSON',
            'success_message' => 'Template importato con successo',
            'error_message' => 'Errore nell\'importazione del template',
        ],
    ],
    'messages' => [
        'success' => 'Operazione completata con successo',
        'error' => 'Si è verificato un errore durante l\'operazione',
        'confirmation' => 'Sei sicuro di voler procedere con questa operazione?',
        'template_created' => 'Il template email è stato creato con successo',
        'template_updated' => 'Il template email è stato aggiornato con successo',
        'template_deleted' => 'Il template email è stato eliminato con successo',
    ],
    'status' => [
        'sent' => 'Inviata',
        'delivered' => 'Consegnata',
        'failed' => 'Fallita',
        'opened' => 'Aperta',
        'clicked' => 'Cliccata',
        'bounced' => 'Respinta',
        'spam' => 'Segnalata come spam',
    ],
];
=======
return array (
  'navigation' => 
  array (
    'group' => 'Notifiche',
    'label' => 'Template Email',
    'plural' => 'Template Email',
    'singular' => 'Template Email',
    'icon' => 'heroicon-o-envelope',
    'sort' => 1,
  ),
  'sections' => 
  array (
    'main' => 'Informazioni Principali',
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
    ),
    'mailable' => 
    array (
      'label' => 'Classe Mailable',
      'placeholder' => 'Inserisci il nome della classe Mailable',
      'help' => 'La classe PHP che gestisce l\'invio dell\'email',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'placeholder' => 'Inserisci l\'oggetto dell\'email',
      'help' => 'L\'oggetto che apparirà nell\'email',
      'helper_text' => 'subject',
    ),
    'html_template' => 
    array (
      'label' => 'Contenuto HTML',
      'placeholder' => 'Inserisci il contenuto HTML dell\'email',
      'help' => 'Il contenuto dell\'email in formato HTML',
      'helper_text' => 'html_template',
    ),
    'text_template' => 
    array (
      'label' => 'Contenuto Testo',
      'placeholder' => 'Inserisci il contenuto testuale dell\'email',
      'help' => 'Versione testuale dell\'email per client che non supportano HTML',
      'helper_text' => 'text_template',
    ),
    'version' => 
    array (
      'label' => 'Versione',
      'help' => 'Numero di versione del template',
    ),
    'created_at' => 
    array (
      'label' => 'Data Creazione',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima Modifica',
    ),
    'created_by' => 
    array (
      'label' => 'Creato da',
      'placeholder' => 'Utente che ha creato la versione',
      'tooltip' => 'Utente che ha creato la versione',
    ),
    'change_notes' => 
    array (
      'label' => 'Note di modifica',
      'placeholder' => 'Inserisci le note sulle modifiche apportate',
      'tooltip' => 'Note opzionali sulle modifiche effettuate in questa versione',
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
  ),
  'filters' => 
  array (
    'search_placeholder' => 'Cerca template...',
    'version' => 
    array (
      'label' => 'Versione',
      'placeholder' => 'Seleziona versione',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Nuovo Template',
      'modal' => 
      array (
        'heading' => 'Crea Template Email',
        'description' => 'Inserisci i dettagli del nuovo template email',
        'submit' => 'Crea',
      ),
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'modal' => 
      array (
        'heading' => 'Modifica Template Email',
        'description' => 'Modifica i dettagli del template email',
        'submit' => 'Salva',
      ),
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'modal' => 
      array (
        'heading' => 'Elimina Template Email',
        'description' => 'Sei sicuro di voler eliminare questo template? Questa azione non può essere annullata.',
        'submit' => 'Elimina',
      ),
    ),
    'restore' => 
    array (
      'label' => 'Ripristina',
    ),
    'force_delete' => 
    array (
      'label' => 'Elimina Definitivamente',
      'modal' => 
      array (
        'heading' => 'Elimina Definitivamente Template Email',
        'description' => 'Sei sicuro di voler eliminare definitivamente questo template? Questa azione non può essere annullata.',
        'submit' => 'Elimina Definitivamente',
      ),
    ),
    'new_version' => 
    array (
      'label' => 'Nuova Versione',
      'modal' => 
      array (
        'heading' => 'Crea Nuova Versione',
        'description' => 'Crea una nuova versione del template email',
        'submit' => 'Crea Versione',
      ),
    ),
  ),
  'messages' => 
  array (
    'created' => 'Template email creato con successo.',
    'updated' => 'Template email aggiornato con successo.',
    'deleted' => 'Template email eliminato con successo.',
    'restored' => 'Template email ripristinato con successo.',
    'force_deleted' => 'Template email eliminato definitivamente.',
    'version_created' => 'Nuova versione del template creata con successo.',
  ),
  'status' => 
  array (
    'sent' => 'Inviata',
    'delivered' => 'Consegnata',
    'failed' => 'Fallita',
    'opened' => 'Aperta',
    'clicked' => 'Cliccata',
  ),
  'model' => 
  array (
    'label' => 'mail template',
  ),
);
>>>>>>> ad8c547 (.)
