<?php

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
