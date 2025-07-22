<?php

<<<<<<< HEAD
return [
    'navigation' => [
        'label' => 'Invio Email',
        'group' => [
            'label' => 'Sistema',
            'description' => 'Funzionalità per l\'invio di email attraverso il sistema di notifiche',
=======
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Send Email',
        'group' => [
            'label' => 'System',
            'description' => 'Functionality for sending emails through the notification system',
>>>>>>> a280387 (.)
        ],
        'icon' => 'heroicon-o-envelope',
        'sort' => '49',
    ],
    'fields' => [
        'subject' => [
<<<<<<< HEAD
            'label' => 'Oggetto',
            'placeholder' => 'Inserisci l\'oggetto dell\'email',
            'help' => 'Oggetto che apparirà nell\'intestazione dell\'email',
        ],
        'template_id' => [
            'label' => 'Template Email',
            'placeholder' => 'Seleziona il template email da utilizzare',
            'help' => 'Template predefinito per l\'email (opzionale)',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'destinatario@dominio.com',
            'help' => 'Indirizzo email del destinatario',
        ],
        'cc' => [
            'label' => 'Copia Conoscenza (CC)',
            'placeholder' => 'cc@dominio.com (opzionale)',
            'help' => 'Indirizzi email in copia conoscenza, separati da virgole',
        ],
        'bcc' => [
            'label' => 'Copia Nascosta (BCC)',
            'placeholder' => 'bcc@dominio.com (opzionale)',
            'help' => 'Indirizzi email in copia nascosta, separati da virgole',
        ],
        'content' => [
            'label' => 'Contenuto Testo',
            'placeholder' => 'Inserisci il contenuto testuale dell\'email',
            'help' => 'Contenuto testuale dell\'email (versione plain text)',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'placeholder' => '<h1>Titolo</h1><p>Contenuto dell\'email in formato HTML</p>',
            'help' => 'Contenuto HTML dell\'email da inviare (opzionale)',
        ],
        'parameters' => [
            'label' => 'Parametri Template',
            'placeholder' => '{\"nome\": \"Mario\", \"cognome\": \"Rossi\"}',
            'help' => 'Parametri JSON per personalizzare il template selezionato',
        ],
        'attachments' => [
            'label' => 'Allegati',
            'placeholder' => 'Seleziona i file da allegare',
            'help' => 'File da allegare all\'email (opzionale)',
        ],
        'priority' => [
            'label' => 'Priorità',
            'placeholder' => 'Seleziona la priorità dell\'email',
            'help' => 'Priorità dell\'email (normale, alta, urgente)',
            'options' => [
                'normal' => 'Normale',
                'high' => 'Alta',
                'urgent' => 'Urgente',
=======
            'label' => 'Subject',
            'placeholder' => 'Enter email subject',
            'help' => 'Subject that will appear in the email header',
        ],
        'template_id' => [
            'label' => 'Email Template',
            'placeholder' => 'Select the email template to use',
            'help' => 'Default template for the email (optional)',
        ],
        'to' => [
            'label' => 'Recipient',
            'placeholder' => 'recipient@domain.com',
            'help' => 'Email address of the recipient',
        ],
        'cc' => [
            'label' => 'Carbon Copy (CC)',
            'placeholder' => 'cc@domain.com (optional)',
            'help' => 'Email addresses in carbon copy, separated by commas',
        ],
        'bcc' => [
            'label' => 'Blind Carbon Copy (BCC)',
            'placeholder' => 'bcc@domain.com (optional)',
            'help' => 'Email addresses in blind carbon copy, separated by commas',
        ],
        'content' => [
            'label' => 'Text Content',
            'placeholder' => 'Enter the text content of the email',
            'help' => 'Text content of the email (plain text version)',
        ],
        'body_html' => [
            'label' => 'HTML Content',
            'placeholder' => '<h1>Title</h1><p>Email content in HTML format</p>',
            'help' => 'HTML content of the email to send (optional)',
        ],
        'parameters' => [
            'label' => 'Template Parameters',
            'placeholder' => '{\"name\": \"John\", \"surname\": \"Doe\"}',
            'help' => 'JSON parameters to customize the selected template',
        ],
        'attachments' => [
            'label' => 'Attachments',
            'placeholder' => 'Select files to attach',
            'help' => 'Files to attach to the email (optional)',
        ],
        'priority' => [
            'label' => 'Priority',
            'placeholder' => 'Select email priority',
            'help' => 'Email priority (normal, high, urgent)',
            'options' => [
                'normal' => 'Normal',
                'high' => 'High',
                'urgent' => 'Urgent',
>>>>>>> a280387 (.)
            ],
        ],
    ],
    'actions' => [
        'send' => [
<<<<<<< HEAD
            'label' => 'Invia Email',
            'success' => 'Email inviata con successo al destinatario',
            'error' => 'Errore nell\'invio dell\'email. Verifica la configurazione.',
            'confirmation' => 'Sei sicuro di voler inviare questa email?',
            'tooltip' => 'Invia l\'email al destinatario specificato',
        ],
        'preview' => [
            'label' => 'Anteprima',
            'success' => 'Anteprima dell\'email generata correttamente',
            'error' => 'Errore nella generazione dell\'anteprima',
            'tooltip' => 'Visualizza l\'anteprima dell\'email prima dell\'invio',
        ],
        'save_draft' => [
            'label' => 'Salva Bozza',
            'success' => 'Bozza salvata correttamente',
            'error' => 'Errore nel salvataggio della bozza',
            'tooltip' => 'Salva l\'email come bozza per inviarla successivamente',
        ],
        'schedule' => [
            'label' => 'Programma Invio',
            'success' => 'Email programmata per l\'invio',
            'error' => 'Errore nella programmazione dell\'invio',
            'tooltip' => 'Programma l\'invio dell\'email per una data e ora specifiche',
        ],
    ],
    'messages' => [
        'success' => 'Email inviata con successo! Controlla la casella email del destinatario.',
        'error' => 'Si è verificato un errore durante l\'invio dell\'email. Verifica la configurazione SMTP.',
        'draft_saved' => 'Bozza salvata correttamente. Puoi recuperarla dalla sezione Bozze.',
        'scheduled' => 'Email programmata per l\'invio. Riceverai una notifica quando verrà inviata.',
        'preview_generated' => 'Anteprima generata correttamente. Controlla l\'aspetto dell\'email.',
        'invalid_template' => 'Template email non valido o non trovato.',
        'invalid_parameters' => 'Parametri del template non validi. Verifica il formato JSON.',
        'no_recipients' => 'Nessun destinatario specificato. Inserisci almeno un indirizzo email.',
        'smtp_error' => 'Errore di configurazione SMTP. Verifica le impostazioni del server.',
    ],
    'validation' => [
        'subject_required' => 'L\'oggetto dell\'email è obbligatorio',
        'to_required' => 'Il destinatario è obbligatorio',
        'to_valid' => 'Il destinatario deve essere un indirizzo email valido',
        'cc_valid' => 'Gli indirizzi in CC devono essere email valide',
        'bcc_valid' => 'Gli indirizzi in BCC devono essere email valide',
        'content_required' => 'Il contenuto dell\'email è obbligatorio',
        'template_exists' => 'Il template selezionato non esiste',
        'parameters_json' => 'I parametri devono essere in formato JSON valido',
        'priority_valid' => 'La priorità deve essere una delle opzioni disponibili',
=======
            'label' => 'Send Email',
            'success' => 'Email sent successfully to the recipient',
            'error' => 'Error sending email. Check the configuration.',
            'confirmation' => 'Are you sure you want to send this email?',
            'tooltip' => 'Send the email to the specified recipient',
        ],
        'preview' => [
            'label' => 'Preview',
            'success' => 'Email preview generated correctly',
            'error' => 'Error generating preview',
            'tooltip' => 'View email preview before sending',
        ],
        'save_draft' => [
            'label' => 'Save Draft',
            'success' => 'Draft saved correctly',
            'error' => 'Error saving draft',
            'tooltip' => 'Save email as draft to send later',
        ],
        'schedule' => [
            'label' => 'Schedule Send',
            'success' => 'Email scheduled for sending',
            'error' => 'Error scheduling send',
            'tooltip' => 'Schedule email sending for a specific date and time',
        ],
    ],
    'messages' => [
        'success' => 'Email sent successfully! Check the recipient\'s email inbox.',
        'error' => 'An error occurred while sending the email. Check the SMTP configuration.',
        'draft_saved' => 'Draft saved correctly. You can retrieve it from the Drafts section.',
        'scheduled' => 'Email scheduled for sending. You will receive a notification when it is sent.',
        'preview_generated' => 'Preview generated correctly. Check the email appearance.',
        'invalid_template' => 'Invalid or not found email template.',
        'invalid_parameters' => 'Invalid template parameters. Check the JSON format.',
        'no_recipients' => 'No recipient specified. Enter at least one email address.',
        'smtp_error' => 'SMTP configuration error. Check server settings.',
    ],
    'validation' => [
        'subject_required' => 'Email subject is required',
        'to_required' => 'Recipient is required',
        'to_valid' => 'Recipient must be a valid email address',
        'cc_valid' => 'CC addresses must be valid emails',
        'bcc_valid' => 'BCC addresses must be valid emails',
        'content_required' => 'Email content is required',
        'template_exists' => 'Selected template does not exist',
        'parameters_json' => 'Parameters must be in valid JSON format',
        'priority_valid' => 'Priority must be one of the available options',
>>>>>>> a280387 (.)
    ],
];
