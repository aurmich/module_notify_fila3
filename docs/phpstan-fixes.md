# Notify Module - PHPStan Fixes

## 📊 **Stato Attuale**

Il modulo Notify ha subito una revisione completa per raggiungere la conformità PHPStan di alto livello. Sono stati risolti la maggior parte degli errori di tipizzazione, rimanendo solo alcuni casi edge di safe casting.

## 🔧 **Correzioni Implementate**

### 1. **ConfigHelper.php - Errori di Tipizzazione**

#### Problemi Risolti
- **Linea 27**: Parametri `array_merge` con tipi non corretti
- **Linea 29**: Parametro `recursiveReplace` con tipo non corretto
- **Linea 47**: Parametro `recursiveReplace` con tipo non corretto
- **Linea 85**: Parametro `replaceStringVariables` con tipo non corretto
- **Linee 89, 103, 114, 125, 136, 147**: Parametri `replaceTemplateVariables` con tipi non corretti

#### Soluzioni Implementate
```php
// ❌ PRIMA - Errori di tipizzazione
$companyConfig = Config::get('notify.company', []);
$templateVariables = Config::get('notify.template_variables', []);

// ✅ DOPO - Tipizzazione corretta con PHPDoc
/** @var array<string, mixed> $companyConfig */
$companyConfig = Config::get('notify.company', []);
/** @var array<string, mixed> $templateVariables */
$templateVariables = Config::get('notify.template_variables', []);
```

### 2. **Safe Casting Patterns**
Implementati pattern di safe casting per la conversione da mixed types:

```php
use \Modules\Xot\Actions\Cast\SafeStringCastAction;

// Pattern di Safe Casting implementati
private function safeCastToString(mixed $value): string
{
    if (is_string($value)) {
        return $value;
    }
    
    if (is_null($value)) {
        return '';
    }
    
    return (string) $value;
}

// Utilizzo di SafeStringCastAction
private function castWithAction(mixed $value): string
{
    return SafeStringCastAction::cast($value);
}
```

### 3. **NotifyThemeableFactory.php - Metodo Inesistente**

#### Problema Risolto
- **Linea 53**: Chiamata a metodo `getProjectNamespace()` inesistente in `XotData`

#### Soluzione Implementata
```php
// ❌ PRIMA - Metodo inesistente
protected function getProjectNamespace(): string
{
    return XotData::make()->getProjectNamespace();
}

// ✅ DOPO - Utilizzo di metodi esistenti
$xotData = XotData::make();
'themeable_type' => $xotData->getUserClass(),
```

### 4. **Filament Resources - Array Compatibility**
Tutte le risorse Filament del modulo sono state aggiornate per utilizzare array associativi con chiavi string.

## 📋 **Pattern di Correzione Applicabili**

### 1. **Config Helper Classes**
```php
// ✅ Pattern corretto per helper di configurazione
public static function getConfigValue(string $key): array
{
    /** @var array<string, mixed> $configValue */
    $configValue = Config::get($key, []);
    
    if (!is_array($configValue)) {
        $configValue = [];
    }
    
    return $configValue;
}
```

### 2. **Safe Casting Methods**
```php
// Per casting a string
private function safeCastToString(mixed $value): string
{
    if (is_string($value)) {
        return $value;
    }
    
    if (is_null($value)) {
        return '';
    }
    
    return (string) $value;
}

// Per casting a int
private function safeCastToInt(mixed $value): int
{
    if (is_int($value)) {
        return $value;
    }
    
    if (is_numeric($value)) {
        return (int) $value;
    }
    
    return 0;
}
```

### 3. **Recursive Methods**
```php
// ✅ Pattern corretto per metodi ricorsivi con type safety
private static function processArray(array $data): array
{
    $result = [];
    
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            /** @var array<string, mixed> $value */
            $result[$key] = self::processArray($value);
        } else {
            $result[$key] = $value;
        }
    }
    
    return $result;
}
```

## 🎯 **Progressi**
- **Errori Risolti**: ~90% (da ~24 errori iniziali a ~6)
- **Array Compatibility**: ✅ Completato
- **Method Signatures**: ✅ Completato
- **Safe Casting**: ✅ Implementato (~90% completato)
- **Type Annotations**: ✅ Completato

## 📋 **Errori Rimanenti (~6)**

### Mixed Type Casting Issues
- **Tipo**: `Cannot cast mixed to string/int/float`
- **Localizzazione**: Principalmente in Actions e Services
- **Soluzione**: Pattern di safe casting con validazione completa

## ✅ **Checklist di Conformità**

- [x] **Type Hints**: Tutti i parametri e return types specificati
- [x] **PHPDoc**: Annotazioni complete per proprietà e metodi
- [x] **Generic Types**: Utilizzo di `array<K, V>` per collezioni
- [x] **Array Compatibility**: Filament resources aggiornate
- [x] **Safe Casting**: Pattern implementati
- [ ] **PHPStan Level 9**: ~6 errori rimanenti
- [x] **Method Calls**: Solo metodi esistenti e documentati

## 📚 **Best Practices Implementate**
- **Array Associativi**: Chiavi string per azioni Filament
- **Safe Casting**: Pattern di validazione prima del casting
- **PHPDoc**: Tipi di ritorno precisi
- **Validation**: Controlli di tipo robusti
- **Type Assertions**: Verifica che i valori siano array prima dell'uso
- **Generic Types**: Utilizzo di `array<string, mixed>` per array associativi

## 📚 **Riferimenti**

- [PHPStan Level 10 Guidelines](../../Xot/docs/PHPSTAN_LIVELLO10_LINEE_GUIDA.md)
- [Laraxot Type Safety Rules](../../Xot/docs/TYPE_SAFETY_RULES.md)
- `docs/phpstan-level7-guide.md`: Guida completa PHPStan Level 7
- `docs/phpstan/safe-casting-patterns.md`: Pattern di casting sicuro
- `\Modules\Xot\Actions\Cast\SafeStringCastAction`: Action per casting sicuro

## 🚀 **Prossimi Passi**
1. Identificare e risolvere i 6 errori PHPStan rimanenti
2. Validare con PHPStan Level 9 completo
3. Aggiornare documentazione con nuovi pattern

---

**Ultimo aggiornamento**: 2025-02-09  
**Stato**: 🔄 In corso - ~6 errori PHPStan rimanenti  
**Target**: PHPStan Level 9 compliance  
**Progresso**: 90% completato
