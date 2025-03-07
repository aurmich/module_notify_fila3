<?php

namespace Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Pages\ManageRelatedRecords;
use Modules\Chart\Filament\Resources\ChartResource;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource;
use Modules\Chart\Filament\Resources\ChartResource\Pages\ListCharts;

class ManageCharts extends ManageRelatedRecords
{
    protected static string $resource = SurveyPdfResource::class;

    protected static string $relationship = 'chart';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Chart';
    }

    public function getHeaderActions(): array
    {
        return [
            //Header actions must be an instance of Filament\Actions\Action, or Filament\Actions\ActionGroup.
            //Tables\Actions\CreateAction::make(),
            //Tables\Actions\AssociateAction::make(),
            //ExportXlsAction::make(),
        ];
    }

    public function getTableHeaderActions(): array
    {
        return [

            Tables\Actions\CreateAction::make(),
            Tables\Actions\AssociateAction::make(),

        ];
    }

    public function getTableActions(): array
    {
        return [
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DissociateAction::make(),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\ForceDeleteAction::make(),
            Tables\Actions\RestoreAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return ChartResource::form($form);
    }

    public function table(Table $table): Table
    {
        // return ChartResource::table($table)
        //     ->headerActions($this->getTableHeaderActions())
        //     ->actions($this->getTableActions());

        return app(ListCharts::class)->table($table)
            ->headerActions($this->getTableHeaderActions());

    }
}
