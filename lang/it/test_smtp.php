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
