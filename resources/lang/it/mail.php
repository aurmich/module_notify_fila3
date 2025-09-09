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
                'tooltip' => 'Nome identificativo del template',
=======
                'tooltip' => 'Nome identificativo del template'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Nome identificativo del template',
>>>>>>> 92cdd4f5 (.)
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Codice univoco del template',
=======
                'tooltip' => 'Codice univoco del template'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Codice univoco del template',
>>>>>>> 92cdd4f5 (.)
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Descrizione dettagliata del template',
=======
                'tooltip' => 'Descrizione dettagliata del template'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Descrizione dettagliata del template',
>>>>>>> 92cdd4f5 (.)
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Oggetto dell\'email',
=======
                'tooltip' => 'Oggetto dell\'email'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Oggetto dell\'email',
>>>>>>> 92cdd4f5 (.)
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Contenuto HTML dell\'email',
=======
                'tooltip' => 'Contenuto HTML dell\'email'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Contenuto HTML dell\'email',
>>>>>>> 92cdd4f5 (.)
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Contenuto testuale dell\'email',
=======
                'tooltip' => 'Contenuto testuale dell\'email'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Contenuto testuale dell\'email',
>>>>>>> 92cdd4f5 (.)
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
<<<<<<< HEAD
                    'telegram' => ['label' => 'Telegram'],
                ],
=======
                    'telegram' => ['label' => 'Telegram']
                ]
>>>>>>> 0666f472 (.)
=======
                    'telegram' => ['label' => 'Telegram'],
                ],
>>>>>>> 92cdd4f5 (.)
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Variabili disponibili nel template',
=======
                'tooltip' => 'Variabili disponibili nel template'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Variabili disponibili nel template',
>>>>>>> 92cdd4f5 (.)
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Condizioni di invio',
=======
                'tooltip' => 'Condizioni di invio'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Condizioni di invio',
>>>>>>> 92cdd4f5 (.)
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Dati per testare il template',
=======
                'tooltip' => 'Dati per testare il template'
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Dati per testare il template',
>>>>>>> 92cdd4f5 (.)
            ],
            'category' => [
                'label' => 'Categoria',
                'placeholder' => 'Inserisci la categoria',
<<<<<<< HEAD
<<<<<<< HEAD
                'tooltip' => 'Categoria del template',
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template',
            ],
=======
                'tooltip' => 'Categoria del template'
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template'
            ]
>>>>>>> 0666f472 (.)
=======
                'tooltip' => 'Categoria del template',
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template',
            ],
>>>>>>> 92cdd4f5 (.)
        ],
        'filters' => [
            'category' => [
                'label' => 'Categoria',
                'options' => [
                    'welcome' => ['label' => 'Benvenuto'],
                    'reminder' => ['label' => 'Promemoria'],
<<<<<<< HEAD
<<<<<<< HEAD
                    'notification' => ['label' => 'Notifica'],
                ],
=======
                    'notification' => ['label' => 'Notifica']
                ]
>>>>>>> 0666f472 (.)
=======
                    'notification' => ['label' => 'Notifica'],
                ],
>>>>>>> 92cdd4f5 (.)
            ],
            'is_active' => [
                'label' => 'Stato',
                'options' => [
                    'active' => ['label' => 'Attivo'],
<<<<<<< HEAD
<<<<<<< HEAD
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
=======
                    'inactive' => ['label' => 'Inattivo']
                ]
            ]
>>>>>>> 0666f472 (.)
=======
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
>>>>>>> 92cdd4f5 (.)
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
<<<<<<< HEAD
<<<<<<< HEAD
                'color' => 'primary',
=======
                'color' => 'primary'
>>>>>>> 0666f472 (.)
=======
                'color' => 'primary',
>>>>>>> 92cdd4f5 (.)
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
<<<<<<< HEAD
<<<<<<< HEAD
                'color' => 'danger',
=======
                'color' => 'danger'
>>>>>>> 0666f472 (.)
=======
                'color' => 'danger',
>>>>>>> 92cdd4f5 (.)
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
<<<<<<< HEAD
<<<<<<< HEAD
                'color' => 'success',
            ],
=======
                'color' => 'success'
            ]
>>>>>>> 0666f472 (.)
=======
                'color' => 'success',
            ],
>>>>>>> 92cdd4f5 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 92cdd4f5 (.)
                    'color' => 'secondary',
                ],
            ],
        ],
    ],
];
<<<<<<< HEAD
=======
                    'color' => 'secondary'
                ]
            ]
        ]
    ]
]; 
>>>>>>> 0666f472 (.)
=======
>>>>>>> 92cdd4f5 (.)
