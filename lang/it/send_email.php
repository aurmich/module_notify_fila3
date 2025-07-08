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
            'placeholder' => 'Inserisci l\'oggetto',
            'help' => 'Oggetto della email',
        ],
        'template_id' => [
            'label' => 'Template',
            'placeholder' => 'Seleziona il template email',
            'help' => 'ID del template',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'Inserisci l\'indirizzo email',
            'help' => 'Destinatario',
        ],
        'content' => [
            'label' => 'Contenuto',
            'placeholder' => 'Inserisci il contenuto',
            'help' => 'Contenuto email',
        ],
        'parameters' => [
            'label' => 'Parametri',
            'placeholder' => 'Inserisci i parametri',
            'help' => 'Parametri del template',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'description' => 'Contenuto HTML dell\'email',
            'placeholder' => 'Inserisci il contenuto HTML',
            'help' => 'Contenuto HTML dell\'email da inviare',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'description' => 'Oggetto dell\'email',
            'placeholder' => 'Inserisci l\'oggetto dell\'email',
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
    ],
];
