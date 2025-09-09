<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Company Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for company-specific information that can be customized
    | per project without modifying the module code.
    |
    */
    'company' => [
        'name' => env('COMPANY_NAME', 'Default Company'),
        'team' => env('COMPANY_TEAM', 'Default Team'),
        'webhook_base' => env('WEBHOOK_BASE_URL', 'https://api.example.com'),
        'clinic_name' => env('CLINIC_NAME', 'Default Clinic'),
        'repository_url' => env('REPOSITORY_URL', 'https://github.com/example/repo'),
<<<<<<< HEAD
=======
return [
    /*
    |--------------------------------------------------------------------------
    | Canali di Notifica
    |--------------------------------------------------------------------------
    |
    | Qui puoi configurare i canali di notifica disponibili e le loro impostazioni.
    | Ogni canale può avere le proprie configurazioni specifiche.
    |
    */
    'channels' => [
        'mail' => [
            'driver' => 'mail',
            'from' => [
                'address' => env('MAIL_FROM_ADDRESS', 'noreply@<nome progetto>.it'),
                'name' => env('MAIL_FROM_NAME', 'il progetto'),
            ],
            'reply_to' => [
                'address' => env('MAIL_REPLY_TO_ADDRESS', 'info@<nome progetto>.it'),
                'name' => env('MAIL_REPLY_TO_NAME', 'il progetto Support'),
            ],
            'tracking' => [
                'opens' => true,
                'clicks' => true,
            ],
        ],

        'sms' => [
            'driver' => env('SMS_DRIVER', 'twilio'),
            'from' => env('SMS_FROM', 'il progetto'),
            'twilio' => [
                'account_sid' => env('TWILIO_ACCOUNT_SID'),
                'auth_token' => env('TWILIO_AUTH_TOKEN'),
                'from' => env('TWILIO_FROM'),
            ],
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'notifications',
            'connection' => null,
        ],
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
    | Default Test Data
    |--------------------------------------------------------------------------
    |
    | Default values for test data that should be generic and reusable
    | across different projects.
    |
    */
    'test_data' => [
        'default_subject' => 'Benvenuto su {{company_name}}',
        'default_content' => 'Grazie per esserti registrato al nostro servizio.',
        'default_welcome_content' => 'Ciao {{user_name}}, benvenuto su {{company_name}}!',
        'default_clinic_name' => '{{clinic_name}}',
        'default_team_name' => '{{team_name}}',
        'default_theme_name' => '{{company_name}} Professional',
        'default_theme_description' => 'Tema professionale per {{company_name}}',
        'default_author' => '{{team_name}}',
        'default_repository' => '{{repository_url}}',
<<<<<<< HEAD
=======
    | Canale di Default
    |--------------------------------------------------------------------------
    |
    | Questo è il canale che verrà utilizzato quando non viene specificato
    | un canale specifico per l'invio di una notifica.
    |
    */
    'default_channel' => env('NOTIFY_DEFAULT_CHANNEL', 'mail'),

    /*
    |--------------------------------------------------------------------------
    | Code
    |--------------------------------------------------------------------------
    |
    | Configurazione per la gestione delle code di notifica.
    | Le notifiche possono essere inviate in modo sincrono o asincrono.
    |
    */
    'queue' => [
        'enabled' => true,
        'connection' => env('QUEUE_CONNECTION', 'database'),
        'queue' => env('NOTIFY_QUEUE', 'notifications'),
        'tries' => 3,
        'retry_after' => 60,
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
    | Webhook Configuration
    |--------------------------------------------------------------------------
    |
    | Default webhook endpoints that can be customized per project.
    |
    */
    'webhooks' => [
        'notification_delivered' => '{{webhook_base}}/webhooks/notification-delivered',
        'notification_bounced' => '{{webhook_base}}/webhooks/notification-bounced',
        'notification_clicked' => '{{webhook_base}}/webhooks/notification-clicked',
<<<<<<< HEAD
=======
    | Template
    |--------------------------------------------------------------------------
    |
    | Configurazione per i template di notifica predefiniti.
    | Questi template possono essere sovrascritti nel database.
    |
    */
    'templates' => [
        'appointment_reminder' => [
            'subject' => 'Promemoria Appuntamento',
            'body' => 'Gentile {patient_name}, le ricordiamo l\'appuntamento del {appointment_date} presso {dentist_name}.',
        ],
        'document_expiry' => [
            'subject' => 'Scadenza Documento',
            'body' => 'Gentile {patient_name}, il documento {document_name} scadrà il {expiry_date}.',
        ],
        'isee_update' => [
            'subject' => 'Aggiornamento ISEE',
            'body' => 'Gentile {patient_name}, il suo ISEE è stato aggiornato. Nuovo valore: {isee_value}.',
        ],
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
    | Email Configuration
    |--------------------------------------------------------------------------
    |
    | Default email settings that can be customized per project.
    |
    */
    'email' => [
        'default_from_address' => env('MAIL_FROM_ADDRESS', 'noreply@example.com'),
        'default_from_name' => env('MAIL_FROM_NAME', '{{company_name}}'),
        'default_admin_email' => env('ADMIN_EMAIL', 'admin@{{company_name}}.com'),
        'default_developer_email' => env('DEVELOPER_EMAIL', 'developer@{{company_name}}.com'),
<<<<<<< HEAD
=======
    | Rate Limiting
    |--------------------------------------------------------------------------
    |
    | Configurazione per il rate limiting delle notifiche.
    | Previene l'invio eccessivo di notifiche allo stesso destinatario.
    |
    */
    'rate_limiting' => [
        'enabled' => true,
        'max_attempts' => 5,
        'decay_minutes' => 1,
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
    | Path Configuration
    |--------------------------------------------------------------------------
    |
    | Default paths that can be customized per project.
    |
    */
    'paths' => [
        'default_avatar_path' => env('DEFAULT_AVATAR_PATH', '/images/avatars/default.svg'),
        'default_image_path' => env('DEFAULT_IMAGE_PATH', '/images/default.jpg'),
<<<<<<< HEAD
=======
    | Tracking
    |--------------------------------------------------------------------------
    |
    | Configurazione per il tracking delle notifiche.
    | Permette di tracciare aperture, click e altri eventi.
    |
    */
    'tracking' => [
        'enabled' => true,
        'pixel' => [
            'enabled' => true,
            'route' => 'notify.track.open',
        ],
        'links' => [
            'enabled' => true,
            'route' => 'notify.track.click',
        ],
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c0f200e (.)
    | Template Variables
    |--------------------------------------------------------------------------
    |
    | Available template variables that can be used in notification templates.
    |
    */
    'template_variables' => [
        'company_name' => '{{company_name}}',
        'team_name' => '{{team_name}}',
        'clinic_name' => '{{clinic_name}}',
        'webhook_base' => '{{webhook_base}}',
        'repository_url' => '{{repository_url}}',
        'user_name' => '{{user_name}}',
        'appointment_date' => '{{appointment_date}}',
        'appointment_time' => '{{appointment_time}}',
<<<<<<< HEAD
=======
    | Pulizia Automatica
    |--------------------------------------------------------------------------
    |
    | Configurazione per la pulizia automatica dei log delle notifiche.
    | I log più vecchi verranno eliminati automaticamente.
    |
    */
    'cleanup' => [
        'enabled' => true,
        'older_than_days' => 30,
        'keep_failed' => true,
        'batch_size' => 1000,
    ],

    /*
    |--------------------------------------------------------------------------
    | GrapesJS Editor
    |--------------------------------------------------------------------------
    |
    | Configurazione per l'editor visuale GrapesJS.
    | Permette di creare e modificare i template in modo visuale.
    |
    */
    'grapesjs' => [
        'enabled' => env('NOTIFY_GRAPESJS_ENABLED', true),
        'storage' => [
            'type' => env('NOTIFY_GRAPESJS_STORAGE', 'remote'),
            'endpoint' => env('NOTIFY_GRAPESJS_ENDPOINT', '/api/notify/templates'),
        ],
        'assets' => [
            'css' => [
                'https://unpkg.com/grapesjs/dist/css/grapes.min.css',
            ],
            'js' => [
                'https://unpkg.com/grapesjs',
            ],
        ],
        'plugins' => [
            'gjs-preset-webpage',
            'gjs-blocks-basic',
        ],
        'blocks' => [
            'basic' => true,
            'forms' => true,
            'components' => true,
        ],
>>>>>>> 9fd314be (.)
=======
>>>>>>> c0f200e (.)
    ],
]; 