<?php

return array (
  'resource' => 
  array (
    'name' => 'Invio Email',
  ),
  'navigation' => 
  array (
    'name' => 'Invio Email',
    'plural' => 'Invio Email',
    'group' => 
    array (
      'name' => 'Sistema',
      'description' => 'Funzionalità per l\'invio di email attraverso il sistema di notifiche',
    ),
    'label' => 'Invio Email',
    'icon' => 'notify-email-animated',
    'sort' => 49,
  ),
  'fields' => 
  array (
    'to' => 
    array (
      'label' => 'Destinatario',
      'description' => 'to',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'description' => 'subject',
      'helper_text' => 'subject',
      'placeholder' => 'subject',
    ),
    'body_html' => 
    array (
      'label' => 'Contenuto HTML',
      'description' => 'body_html',
      'helper_text' => 'body_html',
      'placeholder' => 'body_html',
    ),
  ),
  'actions' => 
  array (
    'send' => 
    array (
      'label' => 'Invia Email',
      'success' => 'Email inviata con successo',
      'error' => 'Errore durante l\'invio dell\'email',
    ),
    'preview' => 
    array (
      'label' => 'Anteprima',
    ),
    'emailFormActions' => 
    array (
      'label' => 'emailFormActions',
    ),
  ),
);
