# Troubleshooting

## Errori Comuni

### 1. Errori con Allegati Email

#### Errore: Cannot access offset of type string on string
```
TypeError
Cannot access offset of type string on string
```

**Causa**: 
- Passaggio di un singolo array per gli allegati invece di un array di array
- Il metodo `addAttachments()` si aspetta un array di array, anche per un singolo allegato

**Soluzione**:
```php
// ERRATO
$attachments = [
    'path' => 'path/to/file.png',
    'as' => 'filename.png',
    'mime' => 'image/png'
];

// CORRETTO
$attachments = [
    [
        'path' => 'path/to/file.png',
        'as' => 'filename.png',
        'mime' => 'image/png'
    ]
];
```

**Lezione Appresa**:
- La struttura degli allegati è fondamentale
- Usare sempre array di array
- Verificare la struttura prima dell'invio

#### Errore: File not found
```
File not found: path/to/file.png
```

**Causa**:
- Path relativo non corretto
- File non esistente
- Permessi insufficienti

**Soluzione**:
- Usare path relativi alla root del progetto
- Verificare l'esistenza del file
- Controllare i permessi del file

**Lezione Appresa**:
- I path relativi sono preferibili
- Esempio: `modules/notify/resources/assets/images/logo.png`
- Evitare `storage_path()` o `base_path()`

#### Errore: Invalid mime type
```
Invalid mime type: application/octet-stream
```

**Causa**:
- Mime type non specificato
- Mime type non supportato
- File corrotto

**Soluzione**:
- Specificare il mime type corretto
- Verificare il tipo di file
- Controllare l'integrità del file

**Lezione Appresa**:
- I mime type devono essere corretti
- Verificare la compatibilità con i client email
- Documentare i mime type supportati

### 2. Best Practices per Allegati

1. **Struttura Dati**:
   - Usare sempre array di array
   - Specificare tutti i campi richiesti
   - Verificare i path

2. **Path Relativi**:
   - Usare path relativi alla root
   - Mantenere una struttura chiara
   - Documentare la posizione dei file

3. **Mime Type**:
   - Specificare sempre il mime type
   - Verificare la compatibilità
   - Documentare i tipi supportati

4. **Organizzazione**:
   - Mantenere gli allegati in directory dedicate
   - Usare nomi descrittivi
   - Evitare spazi e caratteri speciali

### 3. Debugging

1. **Verifica File**:
   - Controllare l'esistenza
   - Verificare i permessi
   - Validare il mime type

2. **Test**:
   - Testare con file piccoli
   - Verificare su vari client
   - Controllare i limiti

3. **Log**:
   - Abilitare il logging delle email
   - Controllare i log per errori
   - Verificare le configurazioni

### 4. Workflow Corretto

1. **Preparazione**:
   - Verificare l'esistenza dei file
   - Controllare i mime type
   - Validare i path

2. **Invio**:
   - Preparare gli allegati
   - Configurare il template
   - Inviare l'email

3. **Verifica**:
   - Controllare i log
   - Verificare la consegna
   - Testare gli allegati

## Collegamenti Utili

- [Documentazione Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
- [Email Client Compatibility](https://www.campaignmonitor.com/dev-resources/guides/coding-html-emails/) 
