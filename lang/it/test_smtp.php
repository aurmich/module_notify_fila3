<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Test SMTP',
        'group' => [
            'label' => 'Sistema',
            'description' => 'Test configurazione server SMTP',
        ],
        'icon' => 'heroicon-o-envelope',
        'sort' => 50,
    ],
    'fields' => [
        'host' => [
            'label' => 'Host SMTP',
            'placeholder' => 'smtp.gmail.com',
            'help' => 'Indirizzo del server SMTP',
        ],
        'port' => [
            'label' => 'Porta',
            'placeholder' => '587 o 465',
            'help' => 'Porta del server SMTP (587 per TLS, 465 per SSL)',
        ],
        'username' => [
            'label' => 'Username',
            'placeholder' => 'user@gmail.com',
            'help' => 'Username per l\'autenticazione SMTP',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '********',
            'help' => 'Password per l\'autenticazione SMTP',
        ],
        'encryption' => [
            'label' => 'Crittografia',
            'placeholder' => 'TLS o SSL',
            'help' => 'Tipo di crittografia per la connessione sicura',
        ],
        'from_email' => [
            'label' => 'Email mittente',
            'placeholder' => 'mittente@dominio.it',
            'help' => 'Indirizzo email del mittente',
        ],
        'from_name' => [
            'label' => 'Nome mittente',
            'placeholder' => 'Sistema Notifiche',
            'help' => 'Nome visualizzato del mittente',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'test@email.it',
            'help' => 'Indirizzo email del destinatario per il test',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'placeholder' => 'Test configurazione SMTP',
            'help' => 'Oggetto della mail di test',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'placeholder' => '<p>Questa è una mail di test per verificare la configurazione SMTP.</p>',
            'help' => 'Contenuto HTML della mail di test',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia Test',
            'success' => 'Test SMTP inviato con successo',
            'error' => 'Errore durante l\'invio del test SMTP',
            'confirmation' => 'Sei sicuro di voler inviare la mail di test?',
        ],
        'test_connection' => [
            'label' => 'Test Connessione',
            'success' => 'Connessione SMTP riuscita',
            'error' => 'Errore nella connessione SMTP',
        ],
    ],
    'messages' => [
        'success' => 'Test SMTP inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio del test SMTP',
        'connection_success' => 'Connessione al server SMTP riuscita',
        'connection_error' => 'Impossibile connettersi al server SMTP',
        'authentication_error' => 'Errore di autenticazione SMTP',
        'configuration_error' => 'Errore nella configurazione SMTP',
    ],
    'validation' => [
        'host_required' => 'L\'host SMTP è obbligatorio',
        'port_required' => 'La porta SMTP è obbligatoria',
        'port_numeric' => 'La porta deve essere un numero',
        'username_required' => 'Lo username SMTP è obbligatorio',
        'password_required' => 'La password SMTP è obbligatoria',
        'from_email_required' => 'L\'email mittente è obbligatoria',
        'from_email_valid' => 'L\'email mittente deve essere un indirizzo valido',
        'to_required' => 'L\'email destinatario è obbligatoria',
        'to_valid' => 'L\'email destinatario deve essere un indirizzo valido',
        'subject_required' => 'L\'oggetto della email è obbligatorio',
    ],
];
=======
return array (
  'navigation' =>
  array (
    'name' => 'Test Smtp',
    'plural' => 'Test Smtp',
    'group' =>
    array (
      'name' => 'Invia',
    ),
    'label' => 'Test SMTP',
  ),
  'fields' =>
  array (
    'name' => 'Nome Area',
    'parent' => 'Settore di appartenenza',
    'parent.name' => 'Settore di appartenenza',
    'parent_name' => 'Settore di appartenenza',
    'assets' => 'Quantità di asset',
    'host' =>
    array (
      'label' => 'host',
    ),
    'port' =>
    array (
      'label' => 'port',
    ),
    'username' =>
    array (
      'label' => 'username',
    ),
    'password' =>
    array (
      'label' => 'password',
    ),
    'encryption' =>
    array (
      'label' => 'encryption',
    ),
    'from_email' =>
    array (
      'label' => 'from_email',
    ),
    'from' =>
    array (
      'label' => 'from',
    ),
    'to' =>
    array (
      'label' => 'to',
    ),
    'subject' =>
    array (
      'label' => 'subject',
    ),
    'body_html' =>
    array (
      'label' => 'body_html',
    ),
  ),
  'actions' =>
  array (
    'import' =>
    array (
      'name' => 'Importa da file',
      'fields' =>
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' =>
    array (
      'name' => 'Esporta dati',
      'filename_prefix' => 'Aree al',
      'columns' =>
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'emailFormActions' =>
    array (
      'label' => 'emailFormActions',
    ),
  ),
);
>>>>>>> a6a762f (.)
