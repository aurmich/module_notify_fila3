<?php

namespace Modules\Quaeris\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Modules\Quaeris\Filament\Resources\CustomerResource\Pages\CreateCustomer;
use Modules\Quaeris\Filament\Resources\CustomerResource\Pages\EditCustomer;
use Modules\Quaeris\Filament\Resources\CustomerResource\Pages\ListCustomers;
use Modules\Quaeris\Filament\Resources\CustomerResource\RelationManagers\SurveyPdfsRelationManager;
use Modules\Quaeris\Models\Customer;
use Modules\Xot\Filament\Resources\XotBaseResource;

class CustomerResource extends XotBaseResource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static ?string $recordTitleAttribute = 'name';

    protected static bool $shouldRegisterNavigation = false;

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required(),
        ];
    }

    public static function tableOLD(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('id'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                /*
                Tables\Columns\TextColumn::make('survey_pdfs_count')
                    ->counts('surveyPdfs'),
                */
                // ChildResourceLink::make(SurveyPdfResource::class),
            ])
            ->filters([

            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    Action::make('Action row test')
                        ->icon('heroicon-o-list-bullet')
                        ->color('success')
                        ->action(function (Customer $customer): never {
                            dd($customer);
                        }),
                ]),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
                BulkAction::make('Action bulk test')
                    ->icon('heroicon-o-list-bullet')
                    ->color('success')
                    ->action(function (Collection $collection): never {
                        dd($collection);
                    }),
                // Tables\Actions\BulkAction::make('Generate Images')
                //     ->icon('heroicon-o-list-bullet')
                //     ->color('success')
                //     ->action(function (Collection $records): void {

                //     }),
            ]);
        /*
        ->prependActions([
            Tables\Actions\Action::make('View Suvey Pdf')
                ->color('success')
                ->icon('heroicon-o-list-bullet')
                ->url(fn (Customer $record): string => SurveyPdfResource::getUrl('survey_pdfs', ['record' => $record]))
        ])
        */
    }

    public static function getRelations(): array
    {
        return [
            SurveyPdfsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCustomers::route('/'),
            'create' => CreateCustomer::route('/create'),
            'edit' => EditCustomer::route('/{record}/edit'),
        ];
    }
}
