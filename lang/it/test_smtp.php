<?php

return array (
  'navigation' => 
  array (
    'name' => 'Test Smtp',
    'plural' => 'Test Smtp',
    'group' => 
    array (
      'name' => 'Invia',
    ),
  ),
  'fields' => 
  array (
    'name' => 'Nome Area',
    'parent' => 'Settore di appartenenza',
    'parent.name' => 'Settore di appartenenza',
    'parent_name' => 'Settore di appartenenza',
    'assets' => 'Quantità di asset',
<<<<<<< HEAD
    'body_html' => 
    array (
      'helper_text' => 'body_html',
      'placeholder' => 'body_html',
      'label' => 'body_html',
    ),
    'subject' => 
    array (
      'helper_text' => 'subject',
      'placeholder' => 'subject',
      'label' => 'subject',
    ),
    'to' => 
    array (
      'helper_text' => 'to',
=======
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
>>>>>>> 185a07e (.)
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
