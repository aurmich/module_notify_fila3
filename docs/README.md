# Modulo Notify

## Panoramica
Il modulo Notify gestisce tutte le notifiche dell'applicazione, fornendo un sistema centralizzato per l'invio di notifiche via email, SMS, push e altri canali. Si integra con tutti gli altri moduli per garantire una comunicazione efficace con gli utenti.

## Collegamenti Principali

### Documentazione Core
- [Struttura del Modulo](structure.md)
- [Canali Notifica](channels.md)
- [Template](templates.md)
- [Eventi](events.md)
- [Best Practices](BEST-PRACTICES.md)

### Integrazioni
- [Integrazione con User](../User/docs/README.md)
- [Integrazione con Xot](../Xot/docs/README.md)
- [Integrazione con Lang](../Lang/docs/README.md)

### Best Practices
- [Convenzioni Notifiche](notification-conventions.md)
- [Gestione Template](template-management.md)
- [PHPStan Fixes](phpstan-fixes.md)

### Testing e Qualità
- [PHPStan Level 9](PHPSTAN_LEVEL9_FIXES.md)
- [PHPStan Level 10](PHPSTAN_LEVEL10_FIXES.md)
- [Testing Best Practices](testing-best-practices.md)

## Struttura del Modulo

```
Modules/Notify/
├── app/
│   ├── Models/
│   │   ├── Notification.php
│   │   └── NotificationTemplate.php
│   ├── Providers/
│   │   ├── NotifyServiceProvider.php
│   │   └── NotifyBaseServiceProvider.php
│   ├── Filament/
│   │   ├── Resources/
│   │   │   ├── NotificationResource.php
│   │   │   └── TemplateResource.php
│   │   ├── Widgets/
│   │   │   └── NotificationStatsWidget.php
│   │   └── Pages/
│   │       └── NotificationManager.php
│   └── Http/
│       └── Controllers/
│           └── NotificationController.php
├── config/
│   └── notify.php
├── database/
│   └── migrations/
│       ├── create_notifications_table.php
│       └── create_notification_templates_table.php
└── resources/
    └── views/
        └── notifications/
            ├── email/
            │   ├── welcome.blade.php
            │   └── reset-password.blade.php
            └── sms/
                ├── welcome.txt
                └── reset-password.txt
```

## Gestione Notifiche

### 1. Notifiche Base
```php
// app/Notifications/WelcomeNotification.php
namespace App\Notifications;

use Modules\Notify\Notifications\XotBaseNotification;
use Modules\Lang\Facades\Lang;

class WelcomeNotification extends XotBaseNotification
{
    public function toMail($notifiable)
    {
        return $this->mailMessage()
            ->subject(Lang::get('notifications.welcome.subject'))
            ->line(Lang::get('notifications.welcome.line1'))
            ->action(
                Lang::get('notifications.welcome.action'),
                url('/dashboard')
            );
    }

    public function toSms($notifiable)
    {
        return Lang::get('notifications.welcome.sms');
    }
}
```

### 2. Template Notifiche
```php
// ❌ NON FARE QUESTO
->subject('Benvenuto')

// ✅ FARE QUESTO
->subject(['label' => 'Benvenuto'])

// ✅ FARE QUESTO (con variabili)
->subject([
    'label' => 'Benvenuto {name}',
    'variables' => ['name']
])
```

### 3. Utilizzo in Controller
```php
use App\Notifications\WelcomeNotification;
use Modules\Notify\Facades\Notify;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create($request->validated());
        
        Notify::send($user, new WelcomeNotification($user));
        
        return redirect()->route('dashboard');
    }
}
```

## Best Practices

### 1. Template
- Utilizzare Blade per email
- Mantenere SMS concisi
- Supportare multilingua
- Gestire variabili

### 2. Canali
```php
// ❌ NON FARE QUESTO
$user->notify(new WelcomeNotification());

// ✅ FARE QUESTO
Notify::send($user, new WelcomeNotification(), ['mail', 'sms']);
```

### 3. Eventi
```php
// ❌ NON FARE QUESTO
event(new UserRegistered($user));

// ✅ FARE QUESTO
Notify::event('user.registered', $user);
```

## Dipendenze Principali

### Moduli
- **User**: Destinatari notifiche
- **Xot**: Notifiche base
- **Lang**: Traduzioni notifiche

### Pacchetti
- Laravel Framework
- Filament
- Livewire
- Mailgun
- Twilio

## Roadmap

### Prossime Feature
1. Nuovi canali notifica
2. Miglioramento template
3. Ottimizzazione invio

### Miglioramenti Pianificati
1. Refactoring notifiche
2. Miglioramento UI
3. Ottimizzazione performance

## Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12
- Utilizzare type hints
- Documentare il codice
- Scrivere test unitari

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## Troubleshooting

### Problemi Comuni
1. Notifiche non inviate
2. Template non trovati
3. Errori di configurazione

### Soluzioni
1. Verifica configurazione
2. Controlla log
3. Consulta documentazione

## Riferimenti

### Documentazione
- [Laravel Notifications](https://laravel.com/docs/12.x/notifications)
- [Filament](https://filamentphp.com/docs)
- [Mailgun](https://documentation.mailgun.com)
- [Twilio](https://www.twilio.com/docs)

### Collegamenti Interni
- [User Module](../User/docs/README.md)
- [Xot Module](../Xot/docs/README.md)
- [Lang Module](../Lang/docs/README.md)

## Changelog

### [1.0.0] - 2024-03-20
#### Added
- Implementazione iniziale
- Sistema notifiche
- Template base
- Canali multipli

#### Changed
- Miglioramento performance
- Ottimizzazione invio
- Refactoring codice

#### Fixed
- Bug notifiche
- Problemi template
- Errori configurazione 