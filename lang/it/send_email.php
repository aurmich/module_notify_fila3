<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Invio Email',
        'group' => [
            'label' => 'Sistema',
            'description' => 'Funzionalità per l\'invio di email attraverso il sistema di notifiche',
        ],
        'icon' => 'notify-email-animated',
        'sort' => 49,
    ],

    'fields' => [
        'object' => [
            'label' => 'Oggetto',
            'placeholder' => 'Es. Conferma appuntamento',
            'help' => 'Oggetto della email che apparirà nell\'intestazione',
        ],
        'template_id' => [
            'label' => 'Template',
            'placeholder' => 'Seleziona il template email',
            'help' => 'Template predefinito per la struttura dell\'email',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'cliente@email.it',
            'help' => 'Indirizzo email del destinatario',
        ],
        'content' => [
            'label' => 'Contenuto',
            'placeholder' => 'Inserisci il contenuto dell\'email',
            'help' => 'Contenuto testuale dell\'email',
        ],
        'parameters' => [
            'label' => 'Parametri',
            'placeholder' => '{"nome": "Mario", "data": "2024-01-15"}',
            'help' => 'Parametri JSON per personalizzare il template',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'placeholder' => '<p>Contenuto HTML dell\'email</p>',
            'help' => 'Contenuto HTML formattato dell\'email',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'placeholder' => 'Es. Conferma appuntamento medico',
            'help' => 'Oggetto che apparirà nell\'intestazione dell\'email',
        ],
    ],

    'actions' => [
        'send' => [
            'label' => 'Invia',
            'success' => 'Email inviata con successo',
            'error' => 'Errore nell\'invio dell\'email',
            'confirmation' => 'Sei sicuro di voler inviare questa email?',
        ],
        'preview' => [
            'label' => 'Anteprima',
            'success' => 'Anteprima generata',
            'error' => 'Errore nella generazione dell\'anteprima',
        ],
    ],

    'messages' => [
        'success' => 'Email inviata con successo',
        'error' => 'Si è verificato un errore durante l\'invio dell\'email',
        'confirmation' => 'Sei sicuro di voler inviare questa email?',
    ],
];
