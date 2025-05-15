<?php

declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Invio Telegram',
<<<<<<< Updated upstream
<<<<<<< HEAD
        'plural' => 'Invio Telegram',
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
        'plural' => 'Invio Telegram',
=======
>>>>>>> a5a128a (.)
=======
        'plural' => 'Invio Telegram',
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
        'plural' => 'Invio Telegram',
>>>>>>> Stashed changes
    ],
    'navigation' => [
        'name' => 'Invio Telegram',
        'plural' => 'Invio Telegram',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Funzionalità per l\'invio di messaggi attraverso Telegram',
        ],
        'label' => 'Invio Telegram',
        'icon' => 'notify-telegram-animated',
        'sort' => 50,
    ],
    'fields' => [
        'chat_id' => [
            'label' => 'ID Chat',
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
            'placeholder' => 'Inserisci l\'ID della chat',
            'helper_text' => 'ID della chat Telegram di destinazione',
            'description' => 'Identificativo univoco della chat Telegram',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Inserisci il messaggio da inviare',
            'helper_text' => 'Contenuto del messaggio Telegram',
            'description' => 'Testo del messaggio da inviare tramite Telegram',
        ],
        'parse_mode' => [
            'label' => 'Formato',
            'placeholder' => 'Seleziona il formato',
            'helper_text' => 'Formato di interpretazione del messaggio',
            'description' => 'Modalità di formattazione del messaggio',
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
=======
=======
            'placeholder' => 'Inserisci l\'ID della chat',
            'helper_text' => 'ID della chat Telegram di destinazione',
            'description' => 'Identificativo univoco della chat Telegram',
>>>>>>> Stashed changes
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Inserisci il messaggio da inviare',
            'helper_text' => 'Contenuto del messaggio Telegram',
            'description' => 'Testo del messaggio da inviare tramite Telegram',
        ],
        'parse_mode' => [
            'label' => 'Formato',
<<<<<<< Updated upstream
>>>>>>> a5a128a (.)
=======
            'placeholder' => 'Seleziona il formato',
            'helper_text' => 'Formato di interpretazione del messaggio',
            'description' => 'Modalità di formattazione del messaggio',
>>>>>>> Stashed changes
=======
        ],
        'message' => [
            'label' => 'Messaggio',
        ],
        'parse_mode' => [
            'label' => 'Formato',
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
            'options' => [
                'text' => 'Testo semplice',
                'html' => 'HTML',
                'markdown' => 'Markdown',
            ],
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia Messaggio',
<<<<<<< Updated upstream
<<<<<<< HEAD
            'tooltip' => 'Invia un messaggio tramite Telegram',
            'success_message' => 'Messaggio inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio',
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
            'tooltip' => 'Invia un messaggio tramite Telegram',
            'success_message' => 'Messaggio inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio',
=======
>>>>>>> a5a128a (.)
=======
            'tooltip' => 'Invia un messaggio tramite Telegram',
            'success_message' => 'Messaggio inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio',
>>>>>>> Stashed changes
=======
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
            'tooltip' => 'Invia un messaggio tramite Telegram',
            'success_message' => 'Messaggio inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio',
>>>>>>> Stashed changes
            'success' => 'Messaggio inviato con successo',
            'error' => 'Errore durante l\'invio del messaggio',
        ],
        'preview' => [
            'label' => 'Anteprima',
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
            'tooltip' => 'Visualizza un\'anteprima del messaggio',
            'success_message' => 'Anteprima generata',
            'error_message' => 'Errore nella generazione dell\'anteprima',
        ],
    ],
    'messages' => [
        'success' => 'Messaggio Telegram inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio del messaggio Telegram',
        'confirmation' => 'Sei sicuro di voler inviare questo messaggio Telegram?',
    ],
<<<<<<< Updated upstream
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
=======
        ],
    ],
>>>>>>> a5a128a (.)
=======
>>>>>>> Stashed changes
=======
        ],
    ],
>>>>>>> 064a54f (.)
>>>>>>> b968ad9 (.)
=======
>>>>>>> Stashed changes
];
