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
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Nome identificativo del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Nome identificativo del template',
=======
                'tooltip' => 'Nome identificativo del template'                'tooltip' => 'Nome identificativo del template',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Nome identificativo del template',
>>>>>>> 1c886e9d (.)
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Codice univoco del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Codice univoco del template',
=======
                'tooltip' => 'Codice univoco del template'                'tooltip' => 'Codice univoco del template',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Codice univoco del template',
>>>>>>> 1c886e9d (.)
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Descrizione dettagliata del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Descrizione dettagliata del template',
=======
                'tooltip' => 'Descrizione dettagliata del template'                'tooltip' => 'Descrizione dettagliata del template',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Descrizione dettagliata del template',
>>>>>>> 1c886e9d (.)
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Oggetto dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Oggetto dell\'email',
=======
                'tooltip' => 'Oggetto dell\'email'                'tooltip' => 'Oggetto dell\'email',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Oggetto dell\'email',
>>>>>>> 1c886e9d (.)
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Contenuto HTML dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Contenuto HTML dell\'email',
=======
                'tooltip' => 'Contenuto HTML dell\'email'                'tooltip' => 'Contenuto HTML dell\'email',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Contenuto HTML dell\'email',
>>>>>>> 1c886e9d (.)
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Contenuto testuale dell\'email'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Contenuto testuale dell\'email',
=======
                'tooltip' => 'Contenuto testuale dell\'email'                'tooltip' => 'Contenuto testuale dell\'email',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Contenuto testuale dell\'email',
>>>>>>> 1c886e9d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
                ]
=======
>>>>>>> d2ea6157 (.)
                    'telegram' => ['label' => 'Telegram'],
=======
                ]                    'telegram' => ['label' => 'Telegram'],
>>>>>>> 2d0e994e (.)
=======
>>>>>>> 1c886e9d (.)
                ],
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Variabili disponibili nel template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Variabili disponibili nel template',
=======
                'tooltip' => 'Variabili disponibili nel template'                'tooltip' => 'Variabili disponibili nel template',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Variabili disponibili nel template',
>>>>>>> 1c886e9d (.)
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Condizioni di invio'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Condizioni di invio',
=======
                'tooltip' => 'Condizioni di invio'                'tooltip' => 'Condizioni di invio',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Condizioni di invio',
>>>>>>> 1c886e9d (.)
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'tooltip' => 'Dati per testare il template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Dati per testare il template',
=======
                'tooltip' => 'Dati per testare il template'                'tooltip' => 'Dati per testare il template',
>>>>>>> 2d0e994e (.)
=======
                'tooltip' => 'Dati per testare il template',
>>>>>>> 1c886e9d (.)
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
<<<<<<< HEAD
                'tooltip' => 'Stato di attivazione del template'
<<<<<<< HEAD
            ]
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Categoria del template',
=======
            ]                'tooltip' => 'Categoria del template',
>>>>>>> 2d0e994e (.)
            ],
            'is_active' => [
                'label' => 'Attivo',
=======
>>>>>>> 1c886e9d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
                ]
=======
>>>>>>> d2ea6157 (.)
                    'notification' => ['label' => 'Notifica'],
=======
                ]                    'notification' => ['label' => 'Notifica'],
>>>>>>> 2d0e994e (.)
=======
>>>>>>> 1c886e9d (.)
                ],
            ],
            'is_active' => [
                'label' => 'Stato',
                'options' => [
                    'active' => ['label' => 'Attivo'],
<<<<<<< HEAD
=======
                    'inactive' => ['label' => 'Inattivo']
<<<<<<< HEAD
                ]
<<<<<<< HEAD
            ]
=======
>>>>>>> d2ea6157 (.)
                    'inactive' => ['label' => 'Inattivo'],
=======
            ]                    'inactive' => ['label' => 'Inattivo'],
>>>>>>> 2d0e994e (.)
=======
>>>>>>> 1c886e9d (.)
                ],
            ],
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'color' => 'primary'
=======
>>>>>>> d2ea6157 (.)
                'color' => 'primary',
=======
                'color' => 'primary'                'color' => 'primary',
>>>>>>> 2d0e994e (.)
=======
                'color' => 'primary',
>>>>>>> 1c886e9d (.)
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'color' => 'danger'
=======
>>>>>>> d2ea6157 (.)
                'color' => 'danger',
=======
                'color' => 'danger'                'color' => 'danger',
>>>>>>> 2d0e994e (.)
=======
                'color' => 'danger',
>>>>>>> 1c886e9d (.)
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
<<<<<<< HEAD
<<<<<<< HEAD
=======
                'color' => 'success'
<<<<<<< HEAD
            ]
=======
>>>>>>> d2ea6157 (.)
                'color' => 'success',
=======
            ]                'color' => 'success',
>>>>>>> 2d0e994e (.)
=======
                'color' => 'success',
>>>>>>> 1c886e9d (.)
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
<<<<<<< HEAD
                    'color' => 'secondary'
                ]
            ]
        ]
    ]
<<<<<<< HEAD
]; 
=======
>>>>>>> d2ea6157 (.)
=======
]; 
>>>>>>> 2d0e994e (.)
=======
>>>>>>> 1c886e9d (.)
