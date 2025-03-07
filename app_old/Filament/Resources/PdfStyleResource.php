<?php

namespace Modules\Quaeris\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Modules\Quaeris\Models\PdfStyle;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Quaeris\Filament\Resources\PdfStyleResource\Pages;

class PdfStyleResource extends XotBaseResource
{
    protected static ?string $model = PdfStyle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?int $navigationSort = 16;

    protected static bool $shouldRegisterNavigation = false;

    public static function getFormSchema(): array
    {
        return [
                TextInput::make('color'),
                TextInput::make('bg_color'),

                TextInput::make('font_family'),
                TextInput::make('font_size'),
                TextInput::make('font_style'),

                TextInput::make('backtop'),
                TextInput::make('backbottom'),
                TextInput::make('backleft'),
                TextInput::make('backright'),
                TextInput::make('font_size_question'),
            ];
    }

    public static function tableOLD(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),

                ColorColumn::make('color')->sortable(),
                ColorColumn::make('bg_color')->sortable(),
                TextColumn::make('font_family')->sortable(),
                TextColumn::make('font_size')->sortable(),
                TextColumn::make('font_style')->sortable(),

                TextColumn::make('backtop')->sortable(),
                TextColumn::make('backbottom')->sortable(),
                TextColumn::make('backleft')->sortable(),
                TextColumn::make('backright')->sortable(),
                TextColumn::make('font_size_question')->sortable(),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->filters([

            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPdfStyles::route('/'),
            'create' => Pages\CreatePdfStyle::route('/create'),
            'edit' => Pages\EditPdfStyle::route('/{record}/edit'),
        ];
    }
}
