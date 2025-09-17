<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 3c0d88c (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'email' => TextColumn::make('email')
                ->searchable()
                ->sortable(),
            'phone' => TextColumn::make('phone')
                ->searchable()
                ->sortable(),
            'message' => TextColumn::make('message')
                ->searchable()
                ->sortable(),
            'is_read' => IconColumn::make('is_read')
                ->boolean(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 3c0d88c (.)
    public function getTableFilters(): array
    {
        return [
            'active' => Filter::make('active')
<<<<<<< HEAD
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
=======
                ->query(fn (Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')
                ->query(fn (Builder $query): Builder => $query->where('active', false)),
>>>>>>> 3c0d88c (.)
        ];
    }
}
