<?php

return [
    'navigation' => [
        'group' => [
            'name' => 'Survey',
        ],
        'plural' => 'Surveys',
        'label' => 'Sondaggi',
        'sort' => 9,
        'icon' => 'survey pdf.navigation',
    ],
    'fields' => [
        'id' => [
            'label' => 'Id',
        ],
        'survey_id' => [
            'label' => 'Survey Id',
        ],
        'name' => [
            'label' => 'Nome Survey',
        ],
        'logo' => [
            'label' => 'Logo',
        ],
        'title' => [
            'label' => 'Titolo',
        ],
        'allow_multiple_invite' => [
            'label' => 'Permetti multipli invii allo stesso contatto',
        ],
        'pdf_view' => [
            'label' => 'Layout Pdf',
        ],
        'date_from' => [
            'label' => 'Data Inizio',
        ],
        'date_to' => [
            'label' => 'Data Fine',
        ],
        'question_contact_email' => [
            'label' => 'Email di contatto',
        ],
        'question_filter' => [
            'label' => 'Codice domanda filtro',
        ],
        'xls_field_1' => [
            'label' => 'Elenco codici per xls alert',
        ],
        'customer_id' => [
            'label' => 'customer_id',
        ],
        'xls_field_json' => [
            'label' => 'xls_field_json',
        ],
    ],
    'model' => [
        'label' => 'Survey',
    ],
    'plural' => [
        'model' => [
            'label' => 'Surveys',
        ],
    ],
    'table' => [
        'heading' => '',
    ],
];
