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
<<<<<<< HEAD
        'code' => [
            'label' => 'Codice',
            'tooltip' => 'Codice univoco del template',
            'placeholder' => 'es: appointment_reminder',
            'help' => 'Codice utilizzato per identificare il template nel codice',
        ],
=======
>>>>>>> 185a07e (.)
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
<<<<<<< HEAD
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
=======
        'body' => [
            'label' => 'Corpo',
            'tooltip' => 'Contenuto del messaggio',
            'placeholder' => 'es: Gentile {user_name},\n\nTi ricordiamo che...',
            'help' => 'Il contenuto principale della notifica. Supporta HTML per le email.',
        ],
        'type' => [
            'label' => 'Tipo',
            'tooltip' => 'Tipo di notifica',
            'help' => 'Seleziona il tipo di notifica per cui usare questo template',
            'options' => [
                'email' => [
                    'label' => 'Email',
                    'tooltip' => 'Template per notifiche email',
                ],
                'sms' => [
                    'label' => 'SMS',
                    'tooltip' => 'Template per messaggi SMS',
                ],
                'push' => [
                    'label' => 'Push',
                    'tooltip' => 'Template per notifiche push',
                ],
                'telegram' => [
                    'label' => 'Telegram',
                    'tooltip' => 'Template per messaggi Telegram',
                ],
            ],
        ],
        'variables' => [
            'label' => 'Variabili disponibili',
            'tooltip' => 'Variabili che possono essere utilizzate nel template',
            'help' => 'Usa queste variabili per personalizzare il contenuto',
            'sections' => [
                'user' => [
                    'label' => 'Utente',
                    'tooltip' => 'Variabili relative all\'utente',
                    'variables' => [
                        'name' => [
                            'label' => 'Nome utente',
                            'tooltip' => '{user_name} - Nome completo dell\'utente',
                        ],
                        'email' => [
                            'label' => 'Email utente',
                            'tooltip' => '{user_email} - Indirizzo email dell\'utente',
                        ],
                    ],
                ],
                'notification' => [
                    'label' => 'Notifica',
                    'tooltip' => 'Variabili relative alla notifica',
                    'variables' => [
                        'title' => [
                            'label' => 'Titolo notifica',
                            'tooltip' => '{notification_title} - Titolo della notifica',
                        ],
                        'message' => [
                            'label' => 'Messaggio notifica',
                            'tooltip' => '{notification_message} - Messaggio della notifica',
                        ],
                        'date' => [
                            'label' => 'Data notifica',
                            'tooltip' => '{notification_date} - Data della notifica',
                        ],
                    ],
>>>>>>> 185a07e (.)
                ],
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'tooltip' => 'Stato di attivazione del template',
            'help' => 'Solo i template attivi possono essere utilizzati',
        ],
<<<<<<< HEAD
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
=======
    ],
    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza anteprima del template',
            'icon' => 'heroicon-o-eye',
            'color' => 'primary',
        ],
        'test' => [
            'label' => 'Invia test',
            'tooltip' => 'Invia una notifica di test usando questo template',
            'icon' => 'heroicon-o-paper-airplane',
            'color' => 'info',
            'confirmation' => [
                'title' => 'Conferma test',
                'message' => 'Vuoi inviare una notifica di test usando questo template?',
                'confirm' => 'Sì, invia test',
                'cancel' => 'No, annulla',
            ],
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'tooltip' => 'Crea una copia di questo template',
            'icon' => 'heroicon-o-document-duplicate',
            'color' => 'success',
            'confirmation' => [
                'title' => 'Conferma duplicazione',
                'message' => 'Vuoi creare una copia di questo template?',
                'confirm' => 'Sì, duplica',
                'cancel' => 'No, annulla',
            ],
        ],
    ],
    'messages' => [
        'preview_title' => [
            'title' => 'Anteprima Template',
            'message' => 'Questa è un\'anteprima di come apparirà la notifica',
        ],
        'test_sent' => [
            'title' => 'Test Inviato',
            'message' => 'La notifica di test è stata inviata con successo',
        ],
        'duplicated' => [
            'title' => 'Template Duplicato',
            'message' => 'Il template è stato duplicato con successo',
        ],
>>>>>>> 185a07e (.)
    ],
];
