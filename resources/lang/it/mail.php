<?php

return [
    'template' => [
        'navigation' => [
            'label' => 'Template Email',
            'plural' => 'Template Email',
            'singular' => 'Template Email',
            'group' => 'Notifiche',
            'icon' => 'heroicon-o-envelope',
        ],
        'fields' => [
            'name' => [
                'label' => 'Nome',
                'placeholder' => 'Inserisci il nome del template',
<<<<<<< HEAD
                'tooltip' => 'Nome identificativo del template'
=======
                'tooltip' => 'Nome identificativo del template',
>>>>>>> f05735b (.)
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
<<<<<<< HEAD
                'tooltip' => 'Codice univoco del template'
=======
                'tooltip' => 'Codice univoco del template',
>>>>>>> f05735b (.)
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
<<<<<<< HEAD
                'tooltip' => 'Descrizione dettagliata del template'
=======
                'tooltip' => 'Descrizione dettagliata del template',
>>>>>>> f05735b (.)
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
<<<<<<< HEAD
                'tooltip' => 'Oggetto dell\'email'
=======
                'tooltip' => 'Oggetto dell\'email',
>>>>>>> f05735b (.)
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
<<<<<<< HEAD
                'tooltip' => 'Contenuto HTML dell\'email'
=======
                'tooltip' => 'Contenuto HTML dell\'email',
>>>>>>> f05735b (.)
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
<<<<<<< HEAD
                'tooltip' => 'Contenuto testuale dell\'email'
=======
                'tooltip' => 'Contenuto testuale dell\'email',
>>>>>>> f05735b (.)
            ],
            'channels' => [
                'label' => 'Canali',
                'placeholder' => 'Seleziona i canali',
                'tooltip' => 'Canali di invio disponibili',
                'options' => [
                    'email' => ['label' => 'Email'],
                    'sms' => ['label' => 'SMS'],
                    'push' => ['label' => 'Push Notification'],
                    'whatsapp' => ['label' => 'WhatsApp'],
<<<<<<< HEAD
                    'telegram' => ['label' => 'Telegram']
                ]
=======
                    'telegram' => ['label' => 'Telegram'],
                ],
>>>>>>> f05735b (.)
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
<<<<<<< HEAD
                'tooltip' => 'Variabili disponibili nel template'
=======
                'tooltip' => 'Variabili disponibili nel template',
>>>>>>> f05735b (.)
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
<<<<<<< HEAD
                'tooltip' => 'Condizioni di invio'
=======
                'tooltip' => 'Condizioni di invio',
>>>>>>> f05735b (.)
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
<<<<<<< HEAD
                'tooltip' => 'Dati per testare il template'
=======
                'tooltip' => 'Dati per testare il template',
>>>>>>> f05735b (.)
            ],
            'category' => [
                'label' => 'Categoria',
                'placeholder' => 'Inserisci la categoria',
<<<<<<< HEAD
                'tooltip' => 'Categoria del template'
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template'
            ]
=======
                'tooltip' => 'Categoria del template',
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template',
            ],
>>>>>>> f05735b (.)
        ],
        'filters' => [
            'category' => [
                'label' => 'Categoria',
                'options' => [
                    'welcome' => ['label' => 'Benvenuto'],
                    'reminder' => ['label' => 'Promemoria'],
<<<<<<< HEAD
                    'notification' => ['label' => 'Notifica']
                ]
=======
                    'notification' => ['label' => 'Notifica'],
                ],
>>>>>>> f05735b (.)
            ],
            'is_active' => [
                'label' => 'Stato',
                'options' => [
                    'active' => ['label' => 'Attivo'],
<<<<<<< HEAD
                    'inactive' => ['label' => 'Inattivo']
                ]
            ]
=======
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
>>>>>>> f05735b (.)
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
<<<<<<< HEAD
                'color' => 'primary'
=======
                'color' => 'primary',
>>>>>>> f05735b (.)
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
<<<<<<< HEAD
                'color' => 'danger'
=======
                'color' => 'danger',
>>>>>>> f05735b (.)
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
<<<<<<< HEAD
                'color' => 'success'
            ]
=======
                'color' => 'success',
            ],
>>>>>>> f05735b (.)
        ],
        'preview' => [
            'title' => 'Anteprima Template',
            'subject' => 'Oggetto',
            'body_html' => 'Contenuto HTML',
            'body_text' => 'Contenuto Testuale',
            'variables' => 'Variabili',
            'actions' => [
                'back' => [
                    'label' => 'Torna indietro',
                    'icon' => 'heroicon-o-arrow-left',
<<<<<<< HEAD
                    'color' => 'secondary'
                ]
            ]
        ]
    ]
]; 
=======
                    'color' => 'secondary',
                ],
            ],
        ],
    ],
];
>>>>>>> f05735b (.)
