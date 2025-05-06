<?php

      'label' => 'body_html',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'body' => 
    array (
      'helper_text' => 'body',
      'label' => 'body',
      'placeholder' => 'body',
    ),
    'lang' => 
    array (
      'label' => 'lang',
      'placeholder' => 'lang',
      'helper_text' => 'lang',
    ),
    'type' => 
    array (
      'label' => 'type',
      'placeholder' => 'type',
      'helper_text' => 'type',
    ),
    'post_type' => 
    array (
      'label' => 'post_type',
      'placeholder' => 'post_type',
      'helper_text' => 'post_type',
    ),
    'post_id' => 
    array (
      'label' => 'post_id',
      'placeholder' => 'post_id',
      'helper_text' => 'post_id',
    ),
    'subject' => 
    array (
      'label' => 'subject',
      'placeholder' => 'subject',
      'helper_text' => 'subject',
    ),
    'from' => 
    array (
      'label' => 'from',
      'placeholder' => 'from',
      'helper_text' => 'from',
    ),
    'from_email' => 
    array (
      'label' => 'from_email',
      'placeholder' => 'from_email',
      'helper_text' => 'from_email',
    ),
    'logo_src' => 
    array (
      'label' => 'logo_src',
      'placeholder' => 'logo_src',
      'helper_text' => 'logo_src',
    ),
    'logo_width' => 
    array (
      'label' => 'logo_width',
      'placeholder' => 'logo_width',
      'helper_text' => 'logo_width',
    ),
    'logo_height' => 
    array (
      'label' => 'logo_height',
      'placeholder' => 'logo_height',
      'helper_text' => 'logo_height',
    ),
    'theme' => 
    array (
      'label' => 'theme',
      'placeholder' => 'theme',
      'helper_text' => 'theme',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'updated_at' => 
    array (
      'label' => 'updated_at',
    ),
    'created_at' => 
    array (
      'label' => 'created_at',
    ),
    'id' => 
    array (
      'label' => 'id',
    ),
  ),
  'actions' => 
  array (
    'preview' => 
    array (
      'label' => 'Anteprima',
      'tooltip' => 'Visualizza anteprima del tema',
      'icon' => 'heroicon-o-eye',
      'color' => 'primary',
    ),
    'duplicate' => 
    array (
      'label' => 'Duplica',
      'tooltip' => 'Crea una copia del tema',
      'icon' => 'heroicon-o-document-duplicate',
      'color' => 'info',
      'confirmation' => 
      array (
        'title' => 'Conferma duplicazione',
        'message' => 'Vuoi creare una copia di questo tema?',
        'confirm' => 'Sì, duplica',
        'cancel' => 'No, annulla',
      ),
    ),
    'set_default' => 
    array (
      'label' => 'Imposta predefinito',
      'tooltip' => 'Imposta questo tema come predefinito',
      'icon' => 'heroicon-o-star',
      'color' => 'primary',
      'confirmation' => 
      array (
        'title' => 'Conferma impostazione predefinito',
        'message' => 'Vuoi impostare questo tema come predefinito?',
        'confirm' => 'Sì, imposta',
        'cancel' => 'No, annulla',
      ),
    ),
  ),
  'messages' => 
  array (
    'created' => 
    array (
      'title' => 'Tema Creato',
      'message' => 'Il tema è stato creato con successo',
    ),
    'updated' => 
    array (
      'title' => 'Tema Aggiornato',
      'message' => 'Il tema è stato aggiornato con successo',
    ),
    'deleted' => 
    array (
      'title' => 'Tema Eliminato',
      'message' => 'Il tema è stato eliminato con successo',
    ),
    'duplicated' => 
    array (
      'title' => 'Tema Duplicato',
      'message' => 'Il tema è stato duplicato con successo',
    ),
    'preview' => 
    array (
      'title' => 'Anteprima Tema',
      'message' => 'Questa è un\'anteprima di come apparirà il tema',
    ),
    'set_default' => 
    array (
      'title' => 'Tema Predefinito',
      'message' => 'Il tema è stato impostato come predefinito',
    ),
  ),
  'model' => 
  array (
    'label' => 'notify theme.model',
  ),
);return [
    'navigation' => [
        'group' => 'Sistema',
        'label' => 'Tema Notifica',
        'icon' => 'notify-theme-animated',
        'sort' => 50,
        'description' => 'Gestione del tema per le notifiche',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del tema',
            'placeholder' => 'es: Tema Aziendale',
            'help' => 'Inserisci un nome descrittivo per il tema',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Descrizione del tema',
            'placeholder' => 'es: Tema standard per le comunicazioni aziendali',
            'help' => 'Breve descrizione dello scopo del tema',
        ],
        'colors' => [
            'label' => 'Colori',
            'tooltip' => 'Schema colori del tema',
            'help' => 'Definisci i colori principali del tema',
            'options' => [
                'primary' => [
                    'label' => 'Primario',
                    'tooltip' => 'Colore principale del tema',
                    'placeholder' => 'es: #4A90E2',
                ],
                'secondary' => [
                    'label' => 'Secondario',
                    'tooltip' => 'Colore secondario del tema',
                    'placeholder' => 'es: #5C6AC4',
                ],
                'accent' => [
                    'label' => 'Accento',
                    'tooltip' => 'Colore di accento per elementi in evidenza',
                    'placeholder' => 'es: #F5A623',
                ],
            ],
        ],
        'typography' => [
            'label' => 'Tipografia',
            'tooltip' => 'Impostazioni tipografiche',
            'help' => 'Configura i font e le dimensioni del testo',
            'options' => [
                'font_family' => [
                    'label' => 'Font principale',
                    'tooltip' => 'Font utilizzato per il testo principale',
                    'placeholder' => 'es: Arial, sans-serif',
                ],
                'heading_font' => [
                    'label' => 'Font titoli',
                    'tooltip' => 'Font utilizzato per i titoli',
                    'placeholder' => 'es: Helvetica, Arial, sans-serif',
                ],
            ],
        ],
        'layout' => [
            'label' => 'Layout',
            'tooltip' => 'Impostazioni del layout',
            'help' => 'Configura la struttura del template',
            'options' => [
                'header' => [
                    'label' => 'Intestazione',
                    'tooltip' => 'Stile dell\'intestazione',
                ],
                'footer' => [
                    'label' => 'Piè di pagina',
                    'tooltip' => 'Stile del piè di pagina',
                ],
            ],
        ],
        'assets' => [
            'label' => 'Risorse',
            'tooltip' => 'Risorse del tema',
            'help' => 'Gestisci le risorse associate al tema',
            'options' => [
                'logo' => [
                    'label' => 'Logo',
                    'tooltip' => 'Logo da utilizzare nelle notifiche',
                ],
                'background' => [
                    'label' => 'Sfondo',
                    'tooltip' => 'Immagine di sfondo',
                ],
            ],
        ],
        'is_default' => [
            'label' => 'Predefinito',
            'tooltip' => 'Imposta come tema predefinito',
            'help' => 'Il tema predefinito verrà utilizzato per tutte le notifiche senza tema specifico',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'tooltip' => 'Stato di attivazione del tema',
            'help' => 'Solo i temi attivi possono essere utilizzati',
        ],
    ],
    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza anteprima del tema',
            'icon' => 'heroicon-o-eye',
            'color' => 'primary',
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'tooltip' => 'Crea una copia del tema',
            'icon' => 'heroicon-o-document-duplicate',
            'color' => 'info',
            'confirmation' => [
                'title' => 'Conferma duplicazione',
                'message' => 'Vuoi creare una copia di questo tema?',
                'confirm' => 'Sì, duplica',
                'cancel' => 'No, annulla',
            ],
        ],
        'set_default' => [
            'label' => 'Imposta predefinito',
            'tooltip' => 'Imposta questo tema come predefinito',
            'icon' => 'heroicon-o-star',
            'color' => 'primary',
            'confirmation' => [
                'title' => 'Conferma impostazione predefinito',
                'message' => 'Vuoi impostare questo tema come predefinito?',
                'confirm' => 'Sì, imposta',
                'cancel' => 'No, annulla',
            ],
        ],
    ],
    'messages' => [
        'created' => [
            'title' => 'Tema Creato',
            'message' => 'Il tema è stato creato con successo',
        ],
        'updated' => [
            'title' => 'Tema Aggiornato',
            'message' => 'Il tema è stato aggiornato con successo',
        ],
        'deleted' => [
            'title' => 'Tema Eliminato',
            'message' => 'Il tema è stato eliminato con successo',
        ],
        'duplicated' => [
            'title' => 'Tema Duplicato',
            'message' => 'Il tema è stato duplicato con successo',
        ],
        'preview' => [
            'title' => 'Anteprima Tema',
            'message' => 'Questa è un\'anteprima di come apparirà il tema',
        ],
        'set_default' => [
            'title' => 'Tema Predefinito',
            'message' => 'Il tema è stato impostato come predefinito',
        ],
    ],
];
