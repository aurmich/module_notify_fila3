# Strategia di Testing - Modulo Notify

## Panoramica
Questo documento descrive la strategia di testing per il modulo Notify, focalizzandosi sulla business logic e seguendo i principi DRY + KISS + SOLID + Robust + Laraxot.

## Principi di Testing

### 1. DRY (Don't Repeat Yourself)
- Utilizzare factory e helper comuni per i test
- Creare trait riutilizzabili per funzionalità comuni
- Centralizzare la configurazione dei test

### 2. KISS (Keep It Simple, Stupid)
- Test semplici e focalizzati su una sola funzionalità
- Evitare test complessi e annidati
- Utilizzare nomi di test chiari e descrittivi

### 3. SOLID
- **Single Responsibility**: Ogni test verifica una sola responsabilità
- **Open/Closed**: Test estensibili senza modificare quelli esistenti
- **Liskov Substitution**: Test che funzionano con implementazioni diverse
- **Interface Segregation**: Test specifici per interfacce specifiche
- **Dependency Inversion**: Test che dipendono da astrazioni, non da implementazioni

### 4. Robust
- Test che gestiscono scenari di errore
- Validazione di input edge cases
- Test di fallback e recovery

### 5. Laraxot
- Rispetto delle convenzioni del framework Laraxot
- Utilizzo delle classi base appropriate
- Test che verificano l'integrazione con il sistema modulare

## Struttura dei Test

### Test Unitari
```
tests/Unit/
├── Enums/
│   ├── ContactTypeEnumTest.php ✅
│   ├── MediaTypeEnumTest.php ✅
│   ├── NotificationTypeEnumTest.php ✅
│   ├── SmsDriverEnumTest.php ✅
│   ├── TelegramDriverEnumTest.php ✅
│   └── WhatsAppDriverEnumTest.php ✅
├── Models/
│   ├── ContactTest.php ✅
│   ├── NotificationTemplateTest.php ✅
│   ├── NotificationTemplateVersionTest.php ❌
│   ├── NotificationTypeTest.php ❌
│   ├── NotifyThemeTest.php ❌
│   ├── NotifyThemeableTest.php ❌
│   ├── MailTemplateTest.php ❌
│   ├── MailTemplateLogTest.php ❌
│   ├── MailTemplateVersionTest.php ❌
│   └── NotificationTest.php ❌
└── Services/
    ├── NotificationManagerTest.php ✅
    ├── SmsServiceTest.php ❌
    └── MailEngines/ ❌
```

### Test di Feature
```
tests/Feature/
├── Controllers/
│   ├── NotificationControllerTest.php ❌
│   └── MailTemplateControllerTest.php ❌
├── Filament/
│   ├── Resources/
│   │   ├── NotificationTemplateResourceTest.php ❌
│   │   ├── ContactResourceTest.php ❌
│   │   └── MailTemplateResourceTest.php ❌
│   └── Pages/
│       ├── SendNotificationPageTest.php ❌
│       └── SendPushNotificationPageTest.php ❌
└── Livewire/
    ├── NotificationFormTest.php ❌
    └── MailTemplateFormTest.php ❌
```

## Priorità di Implementazione

### Priorità 1 (Business Logic Core)
- [x] Test per tutti gli Enum (completato)
- [x] Test per modelli core (Contact, NotificationTemplate)
- [x] Test per servizi core (NotificationManager)

### Priorità 2 (Modelli e Relazioni)
- [ ] NotificationTemplateVersion
- [ ] NotificationType
- [ ] NotifyTheme
- [ ] MailTemplate e varianti

### Priorità 3 (Servizi e Controller)
- [ ] SmsService
- [ ] MailEngines
- [ ] Controller per notifiche
- [ ] Controller per template email

### Priorità 4 (UI e Filament)
- [ ] Risorse Filament
- [ ] Pagine Filament
- [ ] Componenti Livewire

## Business Logic da Testare

### 1. Gestione Template
- Creazione e modifica template
- Versioning dei template
- Compilazione template con dati
- Validazione condizioni di invio

### 2. Sistema di Notifiche
- Invio multi-canale
- Gestione errori e retry
- Logging delle notifiche
- Gestione priorità

### 3. Canali di Notifica
- **SMS**: Integrazione con provider (Netfun, Twilio, etc.)
- **Email**: Template responsivi, gestione allegati
- **WhatsApp**: Integrazione con API business
- **Telegram**: Bot e canali

### 4. Gestione Contatti
- Verifica contatti
- Gestione preferenze
- Storico invii
- Gestione duplicati

## Pattern di Testing

### Factory Pattern
```php
// tests/Factories/NotificationTemplateFactory.php
class NotificationTemplateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'code' => $this->faker->unique()->slug(),
            'subject' => $this->faker->sentence(),
            'body_html' => $this->faker->paragraph(),
            'channels' => ['email'],
            'variables' => ['name', 'email'],
            'is_active' => true,
            'version' => 1,
        ];
    }
}
```

### Test di Integrazione
```php
/** @test */
public function it_can_send_notification_through_multiple_channels(): void
{
    $template = NotificationTemplate::factory()->create([
        'channels' => ['email', 'sms'],
    ]);
    
    $recipient = Contact::factory()->create();
    
    $result = $this->notificationManager->send(
        $recipient,
        $template->code,
        ['name' => 'Test User']
    );
    
    $this->assertIsArray($result);
    $this->assertDatabaseHas('notification_logs', [
        'template_id' => $template->id,
        'recipient_id' => $recipient->id,
    ]);
}
```

### Test di Error Handling
```php
/** @test */
public function it_handles_template_not_found_gracefully(): void
{
    $this->expectException(\Exception::class);
    $this->expectExceptionMessage('Template not found: invalid_template');
    
    $recipient = Contact::factory()->create();
    
    $this->notificationManager->send($recipient, 'invalid_template');
}
```

## Metriche di Copertura

### Obiettivi
- **Enum**: 100% ✅
- **Models**: 90% (testare tutte le relazioni e metodi)
- **Services**: 95% (testare tutti i metodi pubblici)
- **Controllers**: 85% (testare tutti i metodi pubblici)
- **Filament Resources**: 80% (testare CRUD e azioni custom)

### Strumenti
- PHPUnit per test unitari
- Pest per test di feature
- PHPStan per analisi statica
- Coverage per metriche di copertura

## Manutenzione e Aggiornamenti

### Aggiornamento Test
- Aggiornare i test quando si modificano i modelli
- Aggiungere test per nuove funzionalità
- Refactorizzare test obsoleti

### Documentazione
- Mantenere aggiornata questa documentazione
- Documentare nuovi pattern di testing
- Aggiornare esempi e best practices

## Collegamenti
- [Strategia Testing Globale](../../../../docs/testing-strategy.md)
- [Best Practices Testing](../../../../docs/testing-best-practices.md)
- [PHPStan Level 10](./phpstan-level10-fixes.md)

Ultimo aggiornamento: 14 Maggio 2025
