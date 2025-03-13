<?php

return [
    'Quality Monitor' => [
        // 'url' => 'docs/getting-started',
        'url' => 'doc_quaeris/docs/quality-monitor',
        // 'children' => [
        //     'Customizing Your Site' => 'docs/customizing-your-site',
        //     'Navigation' => 'docs/navigation',
        //     'Algolia DocSearch' => 'docs/algolia-docsearch',
        //     // 'Custom 404 Page' => 'docs/custom-404-page',
        // ],
    ],
    // 'Jigsaw Docs' => 'https://jigsaw.tighten.co/docs/installation',
    'Come loggarsi' => [
        'url' => 'doc_quaeris/docs/how-to-log-in',
    ],
    'Customers (elenco clienti)' => [
        // 'url' => 'doc_quaeris/docs/select_customers',
        'children' => [
            'Selezione del Customer' => 'doc_quaeris/docs/customers/select_customers',
            'Creazione del Customer' => 'doc_quaeris/docs/customers/create_customers',
            'Associare un customer' => 'doc_quaeris/docs/customers/associate_customers',
        ],
    ],
    'Surveys / Questionari' => [
        'url' => 'doc_quaeris/docs/surveys/create_surveys',
        'children' => [
            'Domande del questionario' => 'doc_quaeris/docs/surveys/question_charts',
            'Gestione Sms/Email' => 'doc_quaeris/docs/surveys/sms_email',
            'Contatti/Gestione degli inviti' => 'doc_quaeris/docs/surveys/contacts',
            'Creazione token' => 'doc_quaeris/docs/surveys/create_tokens',
            'Invio inviti' => 'doc_quaeris/docs/surveys/send_invitations',
        ],
    ],
    'Utente finale sondaggio' => [
        'url' => 'doc_quaeris/docs/users/survey',
    ],
];
