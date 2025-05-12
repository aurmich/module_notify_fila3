<?php

declare(strict_types=1);

return [
  'navigation' => [
    'group' => 'Notifiche',
    'label' => 'Template Email',
    'plural' => 'Template Email',
    'singular' => 'Template Email',
    'icon' => 'heroicon-o-envelope',
    'sort' => 1,
  ],
  'sections' => [
    'main' => 'Informazioni Principali',
  ],
  'fields' => [
    'id' => [
      'label' => 'ID',
    ],
    'mailable' => [
      'label' => 'Classe Mailable',
      'placeholder' => 'Inserisci il nome della classe Mailable',
      'help' => 'La classe PHP che gestisce l\'invio dell\'email',
      'description' => 'mailable',
      'helper_text' => 'mailable',
    ],
    'subject' => [
      'label' => 'Oggetto',
      'placeholder' => 'Inserisci l\'oggetto dell\'email',
      'help' => 'L\'oggetto che apparirà nell\'email',
      'helper_text' => 'subject',
      'description' => 'subject',
    ],
    'html_template' => [
      'label' => 'Contenuto HTML',
      'placeholder' => 'Inserisci il contenuto HTML dell\'email',
      'help' => 'Il contenuto dell\'email in formato HTML',
      'helper_text' => 'html_template',
      'description' => 'html_template',
    ],
    'text_template' => [
      'label' => 'Contenuto Testo',
      'placeholder' => 'Inserisci il contenuto testuale dell\'email',
      'help' => 'Versione testuale dell\'email per client che non supportano HTML',
      'helper_text' => 'text_template',
      'description' => 'text_template',
    ],
    'version' => [
      'label' => 'Versione',
      'help' => 'Numero di versione del template',
    ],
    'created_at' => [
      'label' => 'Data Creazione',
    ],
    'updated_at' => [
      'label' => 'Ultima Modifica',
    ],
    'created_by' => [
      'label' => 'Creato da',
      'placeholder' => 'Utente che ha creato la versione',
      'tooltip' => 'Utente che ha creato la versione',
    ],
    'change_notes' => [
      'label' => 'Note di modifica',
      'placeholder' => 'Inserisci le note sulle modifiche apportate',
      'tooltip' => 'Note opzionali sulle modifiche effettuate in questa versione',
    ],
    'toggleColumns' => [
      'label' => 'toggleColumns',
    ],
    'reorderRecords' => [
      'label' => 'reorderRecords',
    ],
    'resetFilters' => [
      'label' => 'resetFilters',
    ],
    'applyFilters' => [
      'label' => 'applyFilters',
    ],
    'openFilters' => [
      'label' => 'openFilters',
    ],
    'forceDelete' => [
      'label' => 'forceDelete',
    ],
    'restore' => [
      'label' => 'restore',
    ],
    'delete' => [
      'label' => 'delete',
    ],
    'edit' => [
      'label' => 'edit',
    ],
    'layout' => [
      'label' => 'layout',
    ],
    'name' => [
      'label' => 'name',
      'description' => 'name',
      'helper_text' => 'name',
      'placeholder' => 'name',
    ],
    'slug' => [
      'description' => 'slug',
      'helper_text' => 'slug',
      'placeholder' => 'slug',
      'label' => 'slug',
    ],
  ],
  'filters' => [
    'search_placeholder' => 'Cerca template...',
    'version' => [
      'label' => 'Versione',
      'placeholder' => 'Seleziona versione',
    ],
  ],
  'actions' => [
    'create' => [
      'label' => 'Nuovo Template',
      'modal' => [
        'heading' => 'Crea Template Email',
        'description' => 'Inserisci i dettagli del nuovo template email',
        'submit' => 'Crea',
      ],
    ],
    'edit' => [
      'label' => 'Modifica',
      'modal' => [
        'heading' => 'Modifica Template Email',
        'description' => 'Modifica i dettagli del template email',
        'submit' => 'Salva',
      ],
    ],
    'delete' => [
      'label' => 'Elimina',
      'modal' => [
        'heading' => 'Elimina Template Email',
        'description' => 'Sei sicuro di voler eliminare questo template? Questa azione non può essere annullata.',
        'submit' => 'Elimina',
      ],
    ],
    'restore' => [
      'label' => 'Ripristina',
    ],
    'force_delete' => [
      'label' => 'Elimina Definitivamente',
      'modal' => [
        'heading' => 'Elimina Definitivamente Template Email',
        'description' => 'Sei sicuro di voler eliminare definitivamente questo template? Questa azione non può essere annullata.',
        'submit' => 'Elimina Definitivamente',
      ],
    ],
    'new_version' => [
      'label' => 'Nuova Versione',
      'modal' => [
        'heading' => 'Crea Nuova Versione',
        'description' => 'Crea una nuova versione del template email',
        'submit' => 'Crea Versione',
      ],
    ],
  ],
  'messages' => [
    'created' => 'Template email creato con successo.',
    'updated' => 'Template email aggiornato con successo.',
    'deleted' => 'Template email eliminato con successo.',
    'restored' => 'Template email ripristinato con successo.',
    'force_deleted' => 'Template email eliminato definitivamente.',
    'version_created' => 'Nuova versione del template creata con successo.',
  ],
  'status' => [
    'sent' => 'Inviata',
    'delivered' => 'Consegnata',
    'failed' => 'Fallita',
    'opened' => 'Aperta',
    'clicked' => 'Cliccata',
  ],
  'model' => [
    'label' => 'mail template',
  ],
];
