<?php

<<<<<<< HEAD
return [
    'navigation' => [
        'label' => 'Test SMTP',
        'group' => [
            'label' => 'Invia',
=======
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'SMTP Test',
        'group' => [
            'label' => 'Send',
>>>>>>> a280387 (.)
        ],
        'icon' => 'heroicon-o-envelope',
        'sort' => '50',
    ],
    'fields' => [
        'host' => [
<<<<<<< HEAD
            'label' => 'Host SMTP',
            'placeholder' => 'Inserisci l\'host SMTP (es. smtp.gmail.com)',
            'help' => 'Indirizzo del server SMTP per l\'invio delle email',
        ],
        'port' => [
            'label' => 'Porta',
            'placeholder' => 'Inserisci la porta (es. 587 per TLS, 465 per SSL)',
            'help' => 'Porta del server SMTP (587 per TLS, 465 per SSL, 25 per non crittografato)',
        ],
        'username' => [
            'label' => 'Username',
            'placeholder' => 'Inserisci lo username per l\'autenticazione',
            'help' => 'Username per l\'autenticazione SMTP (spesso l\'indirizzo email)',
=======
            'label' => 'SMTP Host',
            'placeholder' => 'Enter SMTP host (e.g. smtp.gmail.com)',
            'help' => 'SMTP server address for sending emails',
        ],
        'port' => [
            'label' => 'Port',
            'placeholder' => 'Enter port (e.g. 587 for TLS, 465 for SSL)',
            'help' => 'SMTP server port (587 for TLS, 465 for SSL, 25 for unencrypted)',
        ],
        'username' => [
            'label' => 'Username',
            'placeholder' => 'Enter username for authentication',
            'help' => 'Username for SMTP authentication (often the email address)',
>>>>>>> a280387 (.)
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '••••••••',
<<<<<<< HEAD
            'help' => 'Password per l\'autenticazione SMTP (può essere una password specifica per app)',
        ],
        'encryption' => [
            'label' => 'Crittografia',
            'placeholder' => 'Seleziona il tipo di crittografia',
            'help' => 'Tipo di crittografia per la connessione SMTP (TLS, SSL, o nessuna)',
            'options' => [
                'tls' => 'TLS (Transport Layer Security)',
                'ssl' => 'SSL (Secure Sockets Layer)',
                'none' => 'Nessuna crittografia',
            ],
        ],
        'from_email' => [
            'label' => 'Email mittente',
            'placeholder' => 'mittente@dominio.com',
            'help' => 'Indirizzo email che apparirà come mittente della email di test',
        ],
        'from_name' => [
            'label' => 'Nome mittente',
            'placeholder' => 'Nome del mittente',
            'help' => 'Nome che apparirà come mittente della email di test',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'destinatario@dominio.com',
            'help' => 'Indirizzo email del destinatario per il test SMTP',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'placeholder' => 'Test configurazione SMTP - SaluteOra',
            'help' => 'Oggetto della email di test per verificare la configurazione',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'placeholder' => '<h1>Test SMTP</h1><p>Questa è una email di test per verificare la configurazione SMTP.</p>',
            'help' => 'Contenuto HTML della email di test (opzionale)',
=======
            'help' => 'Password for SMTP authentication (can be an app-specific password)',
        ],
        'encryption' => [
            'label' => 'Encryption',
            'placeholder' => 'Select encryption type',
            'help' => 'Encryption type for SMTP connection (TLS, SSL, or none)',
            'options' => [
                'tls' => 'TLS (Transport Layer Security)',
                'ssl' => 'SSL (Secure Sockets Layer)',
                'none' => 'No encryption',
            ],
        ],
        'from_email' => [
            'label' => 'Sender Email',
            'placeholder' => 'sender@domain.com',
            'help' => 'Email address that will appear as the sender of the test email',
        ],
        'from_name' => [
            'label' => 'Sender Name',
            'placeholder' => 'Sender name',
            'help' => 'Name that will appear as the sender of the test email',
        ],
        'to' => [
            'label' => 'Recipient',
            'placeholder' => 'recipient@domain.com',
            'help' => 'Email address of the recipient for the SMTP test',
        ],
        'subject' => [
            'label' => 'Subject',
            'placeholder' => 'SMTP Configuration Test - SaluteOra',
            'help' => 'Subject of the test email to verify the configuration',
        ],
        'body_html' => [
            'label' => 'HTML Content',
            'placeholder' => '<h1>SMTP Test</h1><p>This is a test email to verify the SMTP configuration.</p>',
            'help' => 'HTML content of the test email (optional)',
>>>>>>> a280387 (.)
        ],
    ],
    'actions' => [
        'send' => [
<<<<<<< HEAD
            'label' => 'Invia Test SMTP',
            'success' => 'Test SMTP inviato con successo! La configurazione è corretta.',
            'error' => 'Errore durante l\'invio del test SMTP. Verifica la configurazione.',
            'confirmation' => 'Sei sicuro di voler inviare una email di test?',
            'tooltip' => 'Invia una email di test per verificare la configurazione SMTP',
        ],
        'test_connection' => [
            'label' => 'Testa Connessione',
            'success' => 'Connessione SMTP stabilita con successo',
            'error' => 'Impossibile stabilire la connessione SMTP',
            'tooltip' => 'Testa solo la connessione senza inviare email',
        ],
    ],
    'messages' => [
        'success' => 'Test SMTP inviato con successo! Controlla la casella email del destinatario.',
        'error' => 'Si è verificato un errore durante l\'invio del test SMTP. Verifica i parametri di configurazione.',
        'connection_success' => 'Connessione SMTP stabilita correttamente',
        'connection_error' => 'Errore nella connessione SMTP. Verifica host, porta e credenziali.',
        'invalid_configuration' => 'Configurazione SMTP non valida. Verifica tutti i parametri.',
        'email_sent' => 'Email di test inviata correttamente al destinatario',
        'email_failed' => 'Impossibile inviare l\'email di test. Verifica la configurazione.',
    ],
    'validation' => [
        'host_required' => 'L\'host SMTP è obbligatorio',
        'port_required' => 'La porta SMTP è obbligatoria',
        'port_numeric' => 'La porta deve essere un numero',
        'username_required' => 'Lo username SMTP è obbligatorio',
        'password_required' => 'La password SMTP è obbligatoria',
        'from_email_required' => 'L\'email mittente è obbligatoria',
        'from_email_valid' => 'L\'email mittente deve essere un indirizzo valido',
        'to_required' => 'L\'email destinatario è obbligatoria',
        'to_valid' => 'L\'email destinatario deve essere un indirizzo valido',
        'subject_required' => 'L\'oggetto della email è obbligatorio',
=======
            'label' => 'Send SMTP Test',
            'success' => 'SMTP test sent successfully! The configuration is correct.',
            'error' => 'Error sending SMTP test. Check the configuration.',
            'confirmation' => 'Are you sure you want to send a test email?',
            'tooltip' => 'Send a test email to verify the SMTP configuration',
        ],
        'test_connection' => [
            'label' => 'Test Connection',
            'success' => 'SMTP connection established successfully',
            'error' => 'Unable to establish SMTP connection',
            'tooltip' => 'Test only the connection without sending email',
        ],
    ],
    'messages' => [
        'success' => 'SMTP test sent successfully! Check the recipient\'s email inbox.',
        'error' => 'An error occurred while sending the SMTP test. Check the configuration parameters.',
        'connection_success' => 'SMTP connection established correctly',
        'connection_error' => 'SMTP connection error. Check host, port and credentials.',
        'invalid_configuration' => 'Invalid SMTP configuration. Check all parameters.',
        'email_sent' => 'Test email sent correctly to the recipient',
        'email_failed' => 'Unable to send test email. Check the configuration.',
    ],
    'validation' => [
        'host_required' => 'SMTP host is required',
        'port_required' => 'SMTP port is required',
        'port_numeric' => 'Port must be a number',
        'username_required' => 'SMTP username is required',
        'password_required' => 'SMTP password is required',
        'from_email_required' => 'Sender email is required',
        'from_email_valid' => 'Sender email must be a valid address',
        'to_required' => 'Recipient email is required',
        'to_valid' => 'Recipient email must be a valid address',
        'subject_required' => 'Email subject is required',
>>>>>>> a280387 (.)
    ],
];
