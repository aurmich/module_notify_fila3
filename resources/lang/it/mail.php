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
=======
                'tooltip' => 'Nome identificativo del template'
=======
>>>>>>> d2ea6157 (.)
                'tooltip' => 'Nome identificativo del template',
=======
                'tooltip' => 'Nome identificativo del template'                'tooltip' => 'Nome identificativo del template',
>>>>>>> 2d0e994e (.)
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
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
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
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
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
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
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
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
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
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
                ]
=======
>>>>>>> d2ea6157 (.)
                    'telegram' => ['label' => 'Telegram'],
=======
                ]                    'telegram' => ['label' => 'Telegram'],
>>>>>>> 2d0e994e (.)
                ],
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
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
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
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
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
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
                ]
=======
>>>>>>> d2ea6157 (.)
                    'notification' => ['label' => 'Notifica'],
=======
                ]                    'notification' => ['label' => 'Notifica'],
>>>>>>> 2d0e994e (.)
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
<<<<<<< HEAD
            ]
=======
>>>>>>> d2ea6157 (.)
                    'inactive' => ['label' => 'Inattivo'],
=======
            ]                    'inactive' => ['label' => 'Inattivo'],
>>>>>>> 2d0e994e (.)
                ],
            ],
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
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
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
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
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
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
<<<<<<< HEAD
]; 
=======
>>>>>>> d2ea6157 (.)
=======
]; 
>>>>>>> 2d0e994e (.)
