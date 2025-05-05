<?php

return [
    'navigation' => [
        'group' => 'Sistema',
        'label' => 'Template Notifiche',
        'icon' => 'notify-template-animated',
        'sort' => 48,
        'description' => 'Gestione dei modelli per le notifiche',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome identificativo del template',
            'placeholder' => 'es: Notifica Scadenza',
            'help' => 'Inserisci un nome descrittivo per il template',
        ],
        'code' => [
            'label' => 'Codice',
            'tooltip' => 'Codice univoco del template',
            'placeholder' => 'es: appointment_reminder',
            'help' => 'Codice utilizzato per identificare il template nel codice',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Descrizione del template',
            'placeholder' => 'es: Template per le notifiche di scadenza',
            'help' => 'Breve descrizione dello scopo del template',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'tooltip' => 'Oggetto della notifica',
            'placeholder' => 'es: Promemoria: {event_name}',
            'help' => 'Puoi usare le variabili tra parentesi graffe',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'tooltip' => 'Contenuto HTML della notifica',
            'placeholder' => 'es: <h1>Gentile {user_name}</h1>',
            'help' => 'Supporta HTML e variabili tra parentesi graffe',
        ],
        'body_text' => [
            'label' => 'Contenuto Testo',
            'tooltip' => 'Versione testuale della notifica',
            'placeholder' => 'es: Gentile {user_name}',
            'help' => 'Versione senza HTML per SMS e fallback',
        ],
        'category' => [
            'label' => 'Categoria',
            'tooltip' => 'Categoria del template',
            'placeholder' => 'Seleziona una categoria',
            'help' => 'Raggruppa i template per categoria',
            'options' => [
                'system' => 'Sistema',
                'marketing' => 'Marketing',
                'transactional' => 'Transazionale',
            ],
        ],
        'channel' => [
            'label' => 'Canali',
            'tooltip' => 'Canali di invio supportati',
            'help' => 'Seleziona i canali attraverso cui inviare la notifica',
            'options' => [
                'mail' => [
                    'label' => 'Email',
                    'tooltip' => 'Invia tramite email',
                ],
                'sms' => [
                    'label' => 'SMS',
                    'tooltip' => 'Invia tramite SMS',
                ],
                'database' => [
                    'label' => 'Database',
                    'tooltip' => 'Salva nel database',
                ],
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'tooltip' => 'Stato di attivazione del template',
            'help' => 'Solo i template attivi possono essere utilizzati',
        ],
        'version' => [
            'label' => 'Versione',
            'tooltip' => 'Numero di versione del template',
            'help' => 'Incrementato automaticamente ad ogni modifica',
        ],
        'variables' => [
            'label' => 'Variabili',
            'tooltip' => 'Variabili disponibili nel template',
            'help' => 'Definisci le variabili utilizzabili nel template',
            'key_label' => 'Nome Variabile',
            'value_label' => 'Tipo/Descrizione',
        ],
        'conditions' => [
            'label' => 'Condizioni',
            'tooltip' => 'Condizioni di invio',
            'help' => 'Definisci quando il template deve essere inviato',
            'key_label' => 'Campo',
            'value_label' => 'Valore',
        ],
        'preview_data' => [
            'label' => 'Dati Anteprima',
            'tooltip' => 'Dati per anteprima template',
            'help' => 'Dati di esempio per visualizzare l\'anteprima',
            'key_label' => 'Variabile',
            'value_label' => 'Valore Esempio',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
        ],
        'grapesjs_data' => [
            'label' => 'Editor Visuale',
            'tooltip' => 'Editor visuale per il template',
            'help' => 'Crea e modifica il template in modo visuale',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Nuovo Template',
            'success' => 'Template creato con successo',
        ],
        'edit' => [
            'label' => 'Modifica Template',
            'success' => 'Template aggiornato con successo',
        ],
        'delete' => [
            'label' => 'Elimina Template',
            'success' => 'Template eliminato con successo',
            'confirmation' => 'Sei sicuro di voler eliminare questo template?',
        ],
    ],
    'messages' => [
        'no_records' => 'Nessun template trovato',
        'create_first' => 'Crea il tuo primo template di notifica',
    ],
];
