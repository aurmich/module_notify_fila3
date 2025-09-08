<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Tables\Columns;

use Filament\Tables\Columns\ViewColumn;
use Modules\Notify\Enums\ContactTypeEnum;

/**
 * ContactColumn - Colonna Filament riutilizzabile per rendering contatti
<<<<<<< HEAD
 * 
 * Utilizza ViewColumn + Blade view per separare completamente 
 * logica e presentazione seguendo i principi DRY/KISS
 * 
=======
 *
 * Utilizza ViewColumn + Blade view + ContactTypeEnum per separare
 * completamente logica e presentazione seguendo i principi DRY/KISS
 *
>>>>>>> 9b82f1c (.)
 * PATTERN CORRETTO:
 * - ViewColumn per layout complessi
 * - Blade view separata per HTML
 * - Accessibilità WCAG 2.1 AA compliant
 *
 * @author Laraxot Team
 *
 * @version 2.0 - REFACTOR COMPLETO
 *
 * @since 2025-01-06
 */
class ContactColumn extends ViewColumn
{
    /**
     * View Blade per il rendering della colonna
     */
    protected string $view = 'notify::filament.tables.columns.contact';

    protected function setUp(): void
    {
        parent::setUp();

        // Passa i tipi di contatto alla view
        $contact_types = ContactTypeEnum::cases();

        $this->view(static::getView(), [
            'contact_types' => $contact_types,
        ])
            ->label((string) __('notify::columns.contact.label'))
            ->searchable(ContactTypeEnum::getSearchable())
            ->sortable(false)
            ->toggleable(isToggledHiddenByDefault: false);
    }
<<<<<<< HEAD
}
=======

    /**
     * Configurazione personalizzata per campi di ricerca
     *
     * @param  array<string>  $fields  Campi su cui abilitare la ricerca
     */
    public function searchableOn(array $fields): static
    {
        return $this->searchable($fields);
    }

    /**
     * Configurazione personalizzata per etichetta
     *
     * @param  string  $label  Etichetta personalizzata
     */
    public function withLabel(string $label): static
    {
        return $this->label($label);
    }

    /**
     * Disabilita la ricerca per questa colonna
     */
    public function withoutSearch(): static
    {
        return $this->searchable(false);
    }

    /**
     * Configura la colonna come nascosta di default
     */
    public function hiddenByDefault(): static
    {
        return $this->toggleable(isToggledHiddenByDefault: true);
    }
}
>>>>>>> 9b82f1c (.)
