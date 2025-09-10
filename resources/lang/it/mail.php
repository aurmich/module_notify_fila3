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
=======
                'tooltip' => 'Nome identificativo del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Nome identificativo del template',
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
<<<<<<< HEAD
=======
                'tooltip' => 'Codice univoco del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Codice univoco del template',
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
<<<<<<< HEAD
=======
                'tooltip' => 'Descrizione dettagliata del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Descrizione dettagliata del template',
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
<<<<<<< HEAD
=======
                'tooltip' => 'Oggetto dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Oggetto dell\'email',
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
<<<<<<< HEAD
=======
                'tooltip' => 'Contenuto HTML dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Contenuto HTML dell\'email',
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
<<<<<<< HEAD
=======
                'tooltip' => 'Contenuto testuale dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Contenuto testuale dell\'email',
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
=======
                    'telegram' => ['label' => 'Telegram']
                ]
=======
>>>>>>> d2ea6157 (.)
                    'telegram' => ['label' => 'Telegram'],
                ],
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
<<<<<<< HEAD
=======
                'tooltip' => 'Variabili disponibili nel template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Variabili disponibili nel template',
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
<<<<<<< HEAD
=======
                'tooltip' => 'Condizioni di invio'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Condizioni di invio',
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
<<<<<<< HEAD
=======
                'tooltip' => 'Dati per testare il template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Dati per testare il template',
            ],
            'category' => [
                'label' => 'Categoria',
                'placeholder' => 'Inserisci la categoria',
<<<<<<< HEAD
=======
                'tooltip' => 'Categoria del template'
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template'
            ]
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Categoria del template',
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template',
            ],
        ],
        'filters' => [
            'category' => [
                'label' => 'Categoria',
                'options' => [
                    'welcome' => ['label' => 'Benvenuto'],
                    'reminder' => ['label' => 'Promemoria'],
<<<<<<< HEAD
=======
                    'notification' => ['label' => 'Notifica']
                ]
=======
>>>>>>> d2ea6157 (.)
                    'notification' => ['label' => 'Notifica'],
                ],
            ],
            'is_active' => [
                'label' => 'Stato',
                'options' => [
                    'active' => ['label' => 'Attivo'],
<<<<<<< HEAD
=======
                    'inactive' => ['label' => 'Inattivo']
                ]
            ]
=======
>>>>>>> d2ea6157 (.)
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
<<<<<<< HEAD
=======
                'color' => 'primary'
=======
>>>>>>> d2ea6157 (.)
                'color' => 'primary',
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
<<<<<<< HEAD
=======
                'color' => 'danger'
=======
>>>>>>> d2ea6157 (.)
                'color' => 'danger',
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
<<<<<<< HEAD
=======
                'color' => 'success'
            ]
=======
>>>>>>> d2ea6157 (.)
                'color' => 'success',
            ],
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
                    'color' => 'secondary',
                ],
            ],
        ],
    ],
<<<<<<< HEAD
];
=======
];
                    'color' => 'secondary'
                ]
            ]
        ]
    ]
]; 
=======
>>>>>>> d2ea6157 (.)
