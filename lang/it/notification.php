<?php

return array (
  'navigation' => 
  array (
    'group' => 'Sistema',
    'label' => 'Notifiche',
    'icon' => 'notify-notification-animated',
    'sort' => 46,
    'description' => 'Gestione centralizzata delle notifiche di sistema',
  ),
  'fields' => 
  array (
    'title' => 
    array (
      'label' => 'Titolo',
      'tooltip' => 'Titolo della notifica',
      'placeholder' => 'es: Promemoria appuntamento',
      'help' => 'Titolo breve e descrittivo',
    ),
    'message' => 
    array (
      'label' => 'Messaggio',
      'tooltip' => 'Contenuto della notifica',
      'placeholder' => 'es: Il tuo appuntamento è confermato per...',
      'help' => 'Il contenuto principale della notifica',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'tooltip' => 'Tipo di notifica',
      'help' => 'Classifica la notifica per tipo',
      'options' => 
      array (
        'system' => 'Sistema',
        'alert' => 'Avviso',
        'info' => 'Informazione',
        'success' => 'Successo',
        'warning' => 'Attenzione',
        'error' => 'Errore',
      ),
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'tooltip' => 'Stato corrente della notifica',
      'help' => 'Indica lo stato di elaborazione',
      'pending' => 'In attesa',
      'processing' => 'In elaborazione',
      'sent' => 'Inviata',
      'delivered' => 'Consegnata',
      'failed' => 'Fallita',
      'opened' => 'Aperta',
      'clicked' => 'Cliccata',
    ),
    'recipient' => 
    array (
      'label' => 'Destinatario',
      'tooltip' => 'Destinatario della notifica',
      'placeholder' => 'Seleziona destinatario',
      'help' => 'Utente o entità che riceverà la notifica',
    ),
    'channel' => 
    array (
      'label' => 'Canale',
      'tooltip' => 'Canale di invio della notifica',
      'help' => 'Metodo utilizzato per l\'invio',
      'options' => 
      array (
        'mail' => 
        array (
          'label' => 'Email',
          'tooltip' => 'Invia tramite email',
        ),
        'sms' => 
        array (
          'label' => 'SMS',
          'tooltip' => 'Invia tramite SMS',
        ),
        'database' => 
        array (
          'label' => 'Database',
          'tooltip' => 'Salva nel database',
        ),
      ),
    ),
    'sent_at' => 
    array (
      'label' => 'Data invio',
      'tooltip' => 'Data e ora di invio',
      'help' => 'Quando la notifica è stata inviata',
    ),
    'delivered_at' => 
    array (
      'label' => 'Data consegna',
      'tooltip' => 'Data e ora di consegna',
      'help' => 'Quando la notifica è stata consegnata',
    ),
    'opened_at' => 
    array (
      'label' => 'Data apertura',
      'tooltip' => 'Data e ora di apertura',
      'help' => 'Quando la notifica è stata aperta',
    ),
    'clicked_at' => 
    array (
      'label' => 'Data click',
      'tooltip' => 'Data e ora del click',
      'help' => 'Quando la notifica è stata cliccata',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
  ),
  'actions' => 
  array (
    'send' => 
    array (
      'label' => 'Invia Notifica',
      'success' => 'Notifica inviata con successo',
      'error' => 'Errore durante l\'invio della notifica',
    ),
    'resend' => 
    array (
      'label' => 'Reinvia',
      'success' => 'Notifica reinviata con successo',
      'error' => 'Errore durante il reinvio della notifica',
    ),
    'mark_as_read' => 
    array (
      'label' => 'Segna come letta',
      'success' => 'Notifica segnata come letta',
    ),
    'mark_all_as_read' => 
    array (
      'label' => 'Segna tutte come lette',
      'success' => 'Tutte le notifiche segnate come lette',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'success' => 'Notifica eliminata con successo',
      'confirmation' => 'Sei sicuro di voler eliminare questa notifica?',
    ),
  ),
  'messages' => 
  array (
    'no_notifications' => 'Non ci sono notifiche',
    'no_unread_notifications' => 'Non ci sono notifiche non lette',
    'mark_all_as_read_confirmation' => 'Sei sicuro di voler segnare tutte le notifiche come lette?',
  ),
  'filters' => 
  array (
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Filtra per tipo',
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'placeholder' => 'Filtra per stato',
    ),
    'channel' => 
    array (
      'label' => 'Canale',
      'placeholder' => 'Filtra per canale',
    ),
    'date_range' => 
    array (
      'label' => 'Periodo',
      'placeholder' => 'Filtra per periodo',
    ),
  ),
  'model' => 
  array (
    'label' => 'notification.model',
  ),
);
