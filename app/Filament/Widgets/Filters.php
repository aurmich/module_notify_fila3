<?php

namespace Modules\Quaeris\Filament\Widgets;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;

class Filters extends Widget implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static string $view = 'quaeris::filament.widgets.filters';

    protected static ?int $sort = 1;

    protected int|string|array $columnSpan = 'full';

    public function form(Form $form): Form
    {
        // Assert::notNull($user = auth()->user());
        // $currentTeam = $user->currentTeam;
        // Assert::notNull($currentTeam);
        // Assert::isInstanceOf($currentTeam, Customer::class);
        // $surveyPdfOpts = $currentTeam->surveyPdfsActive()->pluck('name', 'id')->toArray();

        return $form
            ->statePath('data')
            ->schema([
                Grid::make()
                    ->schema([
                        Select::make('survey_pdf_id')
                            ->label('Sondaggio')
                            // ->options($surveyPdfOpts)
                            ->options(['a' => 'a', 'b' => 'b'])
                            ->stateBindingModifiers(['defer']),
                        DatePicker::make('from'),
                        DatePicker::make('to'),
                    ]),
            ]);
    }
}
