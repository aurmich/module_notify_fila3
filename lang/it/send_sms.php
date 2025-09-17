<?php

<<<<<<< HEAD
return array (
  'resource' => 
  array (
    'name' => 'Invio SMS',
    'plural' => 'Invio SMS',
  ),
  'navigation' => 
  array (
    'name' => 'Invio SMS',
    'plural' => 'Invio SMS',
    'group' => 
    array (
      'name' => 'Notifiche',
      'description' => 'Gestione dell\'invio di notifiche SMS',
    ),
    'label' => 'Invio SMS',
    'icon' => 'heroicon-o-chat-bubble-left-right',
    'sort' => 15,
  ),
  'fields' => 
  array (
    'driver' => 
    array (
=======
return  [
  'resource' => 
   [
    'name' => 'Invio SMS',
    'plural' => 'Invio SMS',
  ],
  'navigation' => 
   [
    'name' => 'Invio SMS',
    'plural' => 'Invio SMS',
    'group' => 
     [
      'name' => 'Notifiche',
      'description' => 'Gestione dell\'invio di notifiche SMS',
    ],
    'label' => 'Invio SMS',
    'icon' => 'heroicon-o-chat-bubble-left-right',
    'sort' => 15,
  ],
  'fields' => 
   [
    'driver' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'Driver SMS',
      'helper_text' => 'Seleziona il provider per l\'invio SMS',
      'placeholder' => 'Seleziona un driver',
      'label' => 'Driver',
<<<<<<< HEAD
    ),
    'message' => 
    array (
=======
    ],
    'message' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'Contenuto del messaggio',
      'helper_text' => 'Testo del messaggio da inviare',
      'placeholder' => 'Scrivi il messaggio',
      'label' => 'Messaggio',
<<<<<<< HEAD
    ),
    'phone' => 
    array (
=======
    ],
    'phone' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'Numero di telefono',
      'helper_text' => 'Numero del destinatario',
      'placeholder' => 'Inserisci il numero',
      'label' => 'Numero telefono',
<<<<<<< HEAD
    ),
    'gateway' => 
    array (
=======
    ],
    'gateway' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'Gateway SMS',
      'helper_text' => 'Gateway utilizzato per l\'invio',
      'placeholder' => 'Gateway SMS',
      'label' => 'Gateway',
<<<<<<< HEAD
    ),
    'to' => 
    array (
=======
    ],
    'to' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'to',
      'helper_text' => 'to',
      'placeholder' => 'to',
      'label' => 'to',
<<<<<<< HEAD
    ),
    'template_slug' => 
    array (
=======
    ],
    'template_slug' => 
     [
>>>>>>> 3c0d88c (.)
      'description' => 'template_slug',
      'helper_text' => 'template_slug',
      'placeholder' => 'template_slug',
      'label' => 'template_slug',
<<<<<<< HEAD
    ),
  ),
  'actions' => 
  array (
    'send' => 
    array (
=======
    ],
  ],
  'actions' => 
   [
    'send' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Invia SMS',
      'tooltip' => 'Invia un messaggio SMS al destinatario',
      'success_message' => 'SMS inviato con successo',
      'error_message' => 'Errore nell\'invio dell\'SMS',
<<<<<<< HEAD
    ),
    'test' => 
    array (
=======
    ],
    'test' => 
     [
>>>>>>> 3c0d88c (.)
      'label' => 'Test connessione',
      'tooltip' => 'Verifica la connessione con il provider',
      'success_message' => 'Connessione verificata con successo',
      'error_message' => 'Errore nella verifica della connessione',
<<<<<<< HEAD
    ),
  ),
  'messages' => 
  array (
    'success' => 'SMS inviato con successo',
    'error' => 'Si è verificato un errore durante l\'invio dell\'SMS',
    'confirmation' => 'Sei sicuro di voler inviare questo SMS?',
  ),
);
=======
    ],
  ],
  'messages' => 
   [
    'success' => 'SMS inviato con successo',
    'error' => 'Si è verificato un errore durante l\'invio dell\'SMS',
    'confirmation' => 'Sei sicuro di voler inviare questo SMS?',
  ],
];
>>>>>>> 3c0d88c (.)
