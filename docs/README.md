# Modulo Notify - Documentazione

## Panoramica
Il modulo Notify gestisce l'invio di notifiche email, SMS e push attraverso il sistema Laraxot.

## Funzionalità Principali
- Invio email con template personalizzabili
- Notifiche SMS
- Notifiche push
- Gestione code di invio
- Tracking e analytics

## File di Traduzione

### Traduzioni Principali
- `notification.php` - Traduzioni generali per le notifiche
- `contact.php` - Traduzioni per il modulo contatti
- `send_email.php` - **FIX COMPLETATO**: Traduzioni per l'invio email con regola tooltip/helper_text

### Fix Implementati
- [Fix Traduzioni Send Email](send_email_translation_fix.md) - **REGOLA CRITICA**: tooltip e helper_text per ogni campo
- [Miglioramento Traduzioni](send_email_translation_improvement.md) - Documentazione precedente

## Regole Critiche per Traduzioni

### Regola Tooltip e Helper Text
**OGNI CAMPO** con `label` e `placeholder` deve avere:
```php
'field_name' => [
    'label' => 'Etichetta',
    'placeholder' => 'Placeholder diverso',
    'help' => 'Aiuto specifico',
    'description' => 'Descrizione campo',
    'tooltip' => 'Tooltip informativo', // OBBLIGATORIO
    'helper_text' => '', // Vuoto se diverso da placeholder
],
```

### Struttura Espansa Obbligatoria
- Tutti i campi devono avere struttura espansa completa
- MAI usare struttura semplificata
- MAI usare `->label()` nei componenti Filament

## Collegamenti
- [Documentazione Root](../../../docs/translation_standards_links.md)
- [Regole Helper Text](../../../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../../../docs/filament_translation_best_practices.md)

<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-06*
=======
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

### Versione Incoming

> **Nota architetturale**: In <nome progetto> non si utilizzano classi Service custom. Tutte le azioni asincrone e la business logic riutilizzabile devono essere implementate come Queueable Actions tramite il package spatie/laravel-queueable-action.
> Vedi [Queueable Actions con Spatie](queueable-actions.md) per definizione, dispatch e testing.

> **Nota UI/UX**: Usa SEMPRE i componenti Blade nativi di Filament (`<x-filament::...>`). Non usare componenti UI custom se esiste un equivalente Filament. Approfondisci in [filament-blade-components.md](/Themes/One/docs/FILAMENT_COMPONENTS.md) e nella [documentazione Filament](https://filamentphp.com/docs/3.x/support/blade-components/overview).

## Table of Contents
- [Panoramica](#panoramica)
- [Struttura della Documentazione](#struttura-della-documentazione)
  - [Template Email](#template-email)
  - [Notifiche](#notifiche)
  - [Integrazioni](#integrazioni)
- [Analisi delle Soluzioni](#analisi-delle-soluzioni)
  - [Soluzioni Analizzate](#soluzioni-analizzate)
  - [Soluzione Scelta](#soluzione-scelta)
- [Queueable Action: Standard <nome progetto>](#queueable-action-standard-<nome progetto>)
- [Componenti Blade: Standard Filament](#componenti-blade-standard-filament)
- [Note](#note)
- [Contribuire](#contribuire)
- [Collegamenti Completi](#collegamenti-completi)

## Queueable Action: Standard <nome progetto>

<nome progetto> adotta come standard [spatie/laravel-queueable-action](https://github.com/spatie/laravel-queueable-action) per la business logic asincrona e la gestione di azioni riutilizzabili. Non utilizzare Service class custom. Approfondisci in [queueable-action.md](queueable-action.md).

## Componenti Blade: Standard Filament

La PRIMA SCELTA per i componenti Blade sono SEMPRE i [componenti nativi Filament](filament-blade-components.md). Non usare componenti custom se esiste un equivalente Filament. Approfondisci in [filament-blade-components.md](filament-blade-components.md) e nella [documentazione Filament](https://filamentphp.com/docs/3.x/support/blade-components/overview).

## Panoramica
### Esempio Rapido di Invio
```php
Mail::to($user)->send(new Modules\Notify\Mail\WelcomeMail($user));
```
Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema.
Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema <nome progetto>.

## Struttura della Documentazione

### Template Email
- [README.md Template](templates/README.md)
- [Panoramica Template Email](email-template-landscape.md)
- [Deep Dive Tecnico Template](email-templates-deep-dive.md)
- [Analisi Tools Esterni](codebrisk-tools-analysis.md)
- [Collezione Tailwind CSS](webcrunch-tailwind-collection.md)
- [Gestione Template](templates/gestione.md)
- [Personalizzazione](templates/personalizzazione.md)

### Notifiche
- [README.md Notifiche](notifications/README.md)
- [Configurazione](notifications/configurazione.md)
- [Best Practices](notifications/best-practices.md)

### Integrazioni
- [README.md Integrazioni](integrations/README.md)
- [Mailgun](integrations/mailgun.md)
- [Mailtrap](integrations/mailtrap.md)

## Analisi delle Soluzioni

### Soluzioni Analizzate
1. **Laravel Email Templates**
   - Vantaggi:
     - Integrazione nativa con Laravel
     - Sistema di template semplice
     - Supporto per markdown
   - Svantaggi:
     - Funzionalità limitate
     - Personalizzazione complessa

2. **Spatie Database Mail Templates**
   - Vantaggi:
     - Template gestibili dal database
     - Sistema di versioning
     - API flessibile
   - Svantaggi:
     - Overhead database
     - Complessità aggiuntiva

3. **Mailgun Templates**
   - Vantaggi:
     - Editor visuale
     - Analytics avanzate
     - A/B testing
   - Svantaggi:
     - Costi
     - Dipendenza esterna

4. **Laravel Mail Editor**
   - Vantaggi:
     - Editor visuale integrato
     - Preview in tempo reale
     - Gestione template semplice
   - Svantaggi:
     - Limitazioni personalizzazione
     - Performance overhead

### Soluzione Scelta
Per <nome progetto> è stata scelta una soluzione ibrida che combina:
- Template base in Laravel Markdown
- Editor visuale per personalizzazione
- Integrazione con Mailgun per delivery
- Sistema di versioning dei template

## Note
- Tutti i collegamenti sono relativi
- La documentazione è mantenuta in italiano
- I collegamenti sono bidirezionali quando appropriato
- Ogni sezione ha il suo README.md specifico

## Contribuire
Per contribuire alla documentazione, seguire le [Linee Guida](../../../docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../docs/README_links.md).

---

## Proprietà fondamentali del ServiceProvider (Laraxot/PTVX)

Tutti i provider dei moduli che estendono XotBaseServiceProvider **devono** dichiarare:
- `protected string $module_dir = __DIR__;`
- `protected string $module_ns = __NAMESPACE__;`
- `public string $name = 'Notify';`

Queste proprietà sono necessarie per:
- La risoluzione automatica dei path delle risorse
- Il corretto namespace per autoloading e publish
- L'identificazione del modulo nelle operazioni di asset publish

### Esempio
```php
class NotifyServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Notify';
}
```

**Motivazione:**  
- Se mancano queste proprietà, alcune risorse potrebbero non essere caricate correttamente.
- La dichiarazione esplicita garantisce portabilità, manutenibilità e coerenza tra tutti i moduli.

**Approfondimenti:**  
- Vedi anche [../../../../docs/PROVIDER_OVERVIEW.md](../../../../docs/PROVIDER_OVERVIEW.md)

## Regola per i file .sh (script shell)

Tutti i file `.sh` (script shell) devono essere posizionati esclusivamente in una sottocartella dedicata chiamata `bashscripts` (ad esempio `docs/bashscripts/`).
Non devono mai trovarsi direttamente nella root di `docs/` o in altre sottocartelle generiche.

**Motivazione:**
- Ordine e reperibilità: tutti gli script shell sono facilmente individuabili e gestibili.
- Sicurezza: si evita l'esecuzione accidentale di script non previsti.
- Coerenza cross-modulo e tra root/moduli.

**Esempio di struttura corretta:**
```
docs/
└── bashscripts/
    ├── deploy.sh
    ├── clear_cache.sh
    └── backup_db.sh
```

**Checklist aggiornata:**
- [x] Nessun file .sh fuori da bashscripts/
- [x] Documentazione aggiornata
- [x] Struttura coerente in tutti i moduli

## Politica, Filosofia, Religione, Etica, Zen

- **Politica**: Il modulo promuove collaborazione, trasparenza e inclusività, senza discriminazioni.
- **Filosofia**: Minimalismo, chiarezza, miglioramento continuo.
- **Religione**: Laicità, rispetto di tutte le fedi, libertà di pensiero.
- **Etica**: Onestà, rispetto, responsabilità, attenzione all'impatto sociale e ambientale.
- **Zen**: Semplicità, concentrazione sul presente, armonia e serenità nello sviluppo.
## Regole sui Namespace

Segui SEMPRE le regole sui namespace:
- Non includere mai il segmento `App` nel namespace, anche se il file si trova in `app`.
- Esempio corretto: `namespace Modules\Notify\Datas;`
- Consulta la [documentazione dettagliata sulle regole di path e namespace](./PATH_AND_NAMESPACE_RULES.md) e le [regole generali in Xot](../../Xot/docs/NAMESPACE-RULES.md).
- Collegamento bidirezionale: vedi anche [links.md nella root](../../../../docs/links.md)
>>>>>>> a6a762f (.)
