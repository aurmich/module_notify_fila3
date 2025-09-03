<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9fd314be (.)
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Invio Email (AWS)',
        'group' => 'Notifiche',
        'icon' => 'heroicon-o-envelope',
        'color' => 'primary',
        'sort' => 10,
    ],

    'model' => [
        'label' => 'Email AWS',
        'plural' => 'Email AWS',
        'description' => 'Gestione invio email tramite servizio Amazon SES',
    ],

    'fields' => [
        'to' => [
            'label' => 'Destinatario Email',
            'placeholder' => 'Inserisci indirizzo email destinatario',
            'help' => 'Indirizzo email del destinatario principale del messaggio',
        ],
        'subject' => [
            'label' => 'Oggetto Email',
            'placeholder' => 'Inserisci l\'oggetto del messaggio',
            'help' => 'Testo che apparirà come oggetto dell\'email ricevuta',
        ],
        'body_html' => [
            'label' => 'Corpo HTML',
            'placeholder' => 'Inserisci il contenuto HTML dell\'email',
            'help' => 'Contenuto formattato in HTML per email con layout avanzato',
        ],
        'template' => [
            'label' => 'Template Email',
            'placeholder' => 'Seleziona un template predefinito',
            'help' => 'Template predefinito da utilizzare per la formattazione dell\'email',
        ],
        'add_attachments' => [
            'label' => 'Allegati Email',
            'placeholder' => 'Carica file da allegare al messaggio',
            'help' => 'File allegati che verranno inviati insieme all\'email',
        ],
    ],

    'actions' => [
        'send_email' => [
            'label' => 'Invia Email',
            'icon' => 'heroicon-o-paper-airplane',
            'color' => 'success',
            'modal_heading' => 'Conferma invio email',
            'modal_description' => 'Sei sicuro di voler inviare questa email?',
            'success' => 'Email inviata con successo tramite AWS SES',
            'error' => 'Errore durante l\'invio dell\'email',
            'confirmation' => 'L\'email verrà inviata immediatamente',
        ],
    ],

    'messages' => [
        'loading' => 'Preparazione email in corso...',
        'sent' => 'Email inviata correttamente',
        'queue' => 'Email aggiunta alla coda di invio',
        'failed' => 'Invio email fallito',
    ],
];
<<<<<<< HEAD
=======
=======
return array (
  'navigation' =>
  array (
    'label' => 'Invio Email (AWS)',
    'group' => 'Notifiche',
  ),
  'fields' =>
  array (
    'to' =>
    array (
      'label' => 'to',
      'placeholder' => 'to',
      'helper_text' => 'to',
      'description' => 'to',
    ),
    'subject' =>
    array (
      'label' => 'subject',
      'placeholder' => 'subject',
      'helper_text' => 'subject',
      'description' => 'subject',
    ),
    'body_html' =>
    array (
      'label' => 'body_html',
      'placeholder' => 'body_html',
      'helper_text' => 'body_html',
      'description' => 'body_html',
    ),
    'template' =>
    array (
      'label' => 'template',
      'placeholder' => 'template',
      'helper_text' => 'template',
      'description' => 'template',
    ),
    'add_attachments' =>
    array (
      'label' => 'add_attachments',
      'placeholder' => 'add_attachments',
      'helper_text' => 'add_attachments',
      'description' => 'add_attachments',
    ),
  ),
  'actions' =>
  array (
    'sendEmail' =>
    array (
      'label' => 'sendEmail',
    ),
  ),
);
>>>>>>> a6a762f (.)
>>>>>>> 9fd314be (.)
