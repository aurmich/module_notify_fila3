<?php

<<<<<<< HEAD
return array (
  'navigation' => 
  array (
=======
return  [
  'navigation' => 
   [
>>>>>>> 3c0d88c (.)
    'icon' => 'heroicon-o-document-text',
    'label' => 'Template Notifiche',
    'group' => 'Sistema',
    'sort' => 52,
<<<<<<< HEAD
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'Nome',
      'helper' => 'Nome univoco del template',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'helper' => 'Oggetto della notifica',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'helper' => 'Tipo di notifica',
    ),
    'body_text' => 
    array (
      'label' => 'Testo Semplice',
      'helper' => 'Versione testo semplice della notifica',
    ),
    'body_html' => 
    array (
      'label' => 'HTML',
      'helper' => 'Versione HTML della notifica',
    ),
    'preview_data' => 
    array (
      'label' => 'Dati di Anteprima',
      'helper' => 'Dati JSON per l\'anteprima',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
  ),
  'columns' => 
  array (
=======
  ],
  'fields' => 
   [
    'name' => 
     [
      'label' => 'Nome',
      'helper' => 'Nome univoco del template',
    ],
    'subject' => 
     [
      'label' => 'Oggetto',
      'helper' => 'Oggetto della notifica',
    ],
    'type' => 
     [
      'label' => 'Tipo',
      'helper' => 'Tipo di notifica',
    ],
    'body_text' => 
     [
      'label' => 'Testo Semplice',
      'helper' => 'Versione testo semplice della notifica',
    ],
    'body_html' => 
     [
      'label' => 'HTML',
      'helper' => 'Versione HTML della notifica',
    ],
    'preview_data' => 
     [
      'label' => 'Dati di Anteprima',
      'helper' => 'Dati JSON per l\'anteprima',
    ],
    'resetFilters' => 
     [
      'label' => 'resetFilters',
    ],
    'applyFilters' => 
     [
      'label' => 'applyFilters',
    ],
  ],
  'columns' => 
   [
>>>>>>> 3c0d88c (.)
    'name' => 'Nome',
    'subject' => 'Oggetto',
    'type' => 'Tipo',
    'created_at' => 'Creato il',
    'updated_at' => 'Aggiornato il',
<<<<<<< HEAD
  ),
  'actions' => 
  array (
    'preview' => 'Anteprima',
  ),
  'enums' => 
  array (
    'notification_type' => 
    array (
      'email' => 'Email',
      'sms' => 'SMS',
      'push' => 'Notifica Push',
    ),
  ),
);
=======
  ],
  'actions' => 
   [
    'preview' => 'Anteprima',
  ],
  'enums' => 
   [
    'notification_type' => 
     [
      'email' => 'Email',
      'sms' => 'SMS',
      'push' => 'Notifica Push',
    ],
  ],
];
>>>>>>> 3c0d88c (.)
