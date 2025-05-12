# Regole per Path e Namespace nel Modulo Notify

## Struttura Corretta dei Path

### ✅ Path Corretti

```
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers
/var/www/html/saluteora/laravel/Modules/Notify/app/Models
/var/www/html/saluteora/laravel/Modules/Notify/app/Filament
```

### ❌ Path Errati

```
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
```

## Struttura Corretta dei Namespace

### ✅ Namespace Corretti

```php
namespace Modules\Notify\Actions\SMS;
namespace Modules\Notify\Http\Controllers;
namespace Modules\Notify\Providers;
namespace Modules\Notify\Models;
namespace Modules\Notify\Filament;
```

### ❌ Namespace Errati

```php
namespace Modules\Notify\App\Actions\SMS;
namespace Modules\Notify\App\Http\Controllers;
namespace Modules\Notify\App\Providers;
```

## Regola Fondamentale

Anche se i file sono fisicamente posizionati nella cartella `app` (minuscolo), il namespace **NON** deve includere il segmento `App`. Questo è un punto critico da ricordare per evitare errori.

## Esempi Concreti

### Esempio 1: Action per invio SMS

**Path fisico corretto:**
```
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
```

**Namespace corretto:**
```php
namespace Modules\Notify\Actions\SMS;
```

### Esempio 2: Controller

**Path fisico corretto:**
```
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
```

**Namespace corretto:**
```php
namespace Modules\Notify\Http\Controllers;
```

### Esempio 3: Provider

**Path fisico corretto:**
```
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
```

**Namespace corretto:**
```php
namespace Modules\Notify\Providers;
```

## Motivo di questa Regola

Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.

## Collegamenti

- [Regole Generali per i Namespace](/laravel/Modules/Xot/docs/NAMESPACE-RULES.md)
- [Convenzioni di Codice](/laravel/Modules/Xot/docs/CODE-CONVENTIONS.md)
- [Struttura dei Moduli](/laravel/Modules/Xot/docs/MODULE-STRUCTURE.md)

---

*Ultimo aggiornamento: 2025-05-12*
