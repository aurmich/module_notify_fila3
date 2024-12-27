<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Resources;

use Filament\Forms\Form;
use Filament\Tables\Table;
use function Safe\ini_set;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Modules\Quaeris\Models\SurveyPdf;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Pages\SubNavigationPosition;
use Filament\Forms\Components\CheckboxList;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Modules\Quaeris\Actions\Question\GetSurveysOptsAction;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages\EditSurveyPdf;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages\ListSurveyPdfs;
use Modules\Quaeris\Filament\Resources\SurveyPdfResource\Pages\CreateSurveyPdf;

class SurveyPdfResource extends XotBaseResource
{
    protected static ?string $model = SurveyPdf::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $recordTitleAttribute = 'name';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?int $navigationSort = 1;

    // public static function getParent(): string
    // {
    //     return CustomerResource::class;
    // }
    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required(),
            TextInput::make('title'),
            // *
            Select::make('survey_id')
                ->label('Questionario')
                ->helperText('Seleziona il questionario di riferimento')
                ->options(static function () {
                    return app(GetSurveysOptsAction::class)->execute();
                }),
            // */
            Toggle::make('allow_multiple_invite')->inline(false),

            Select::make('pdf_view')
                ->options([
                    'template1' => 'Domanda e risposta sulla stessa pagina',
                    'template2' => 'Una pagina domanda, una pagina risposta',
                    'template3' => 'Domanda e risposta sulla stessa pagina, con pagina iniziale custom (campo title)',
                ])->required(),
            DatePicker::make('date_from')
                ->displayFormat('d/m/Y'),
            DatePicker::make('date_to')
                ->displayFormat('d/m/Y'),
            SpatieMediaLibraryFileUpload::make('logo')
                ->openable()
                ->downloadable()
                ->columnSpanFull()
                ->disk('uploads')
                ->directory('photos'),
            TextInput::make('question_contact_email')
                ->helperText('Inserisci il codice della domanda dove viene indicata la mail per essere contattati, servirà per xls contact'),
            TextInput::make('question_filter')
                ->helperText('Inserisci il codice della domanda che verrà utilizzata come filtro'),
            TextInput::make('xls_field_1'),
            CheckboxList::make('xls_field_json')
                ->options(static function (?SurveyPdf $surveyPdf) {
                    if ($surveyPdf instanceof SurveyPdf) {
                        $data = $surveyPdf->optionsQuestions();

                        $tmp = [];
                        foreach ($data as $item) {
                            $tmp[$item['key']] = $item['label'];
                            if (! empty($item['sons'])) {
                                foreach ($item['sons'] as $son) {
                                    $tmp[$son['key']] = $son['label'];
                                }
                            }
                        }

                        return $tmp;
                    }

                    return [];
                }),
            Hidden::make('customer_id')->default(auth()->user()?->currentTeam?->getKey()),
        ];
    }

    public static function form(Form $form): Form
    {
        ini_set('memory_limit', '-1');

        return $form
            ->schema(static::getFormSchema());
    }

    public static function tableOLD(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('survey_id'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                SpatieMediaLibraryImageColumn::make('logo'), // ->disk('public_html'),//->directory('uploads'),

                // ChildResourceLink::make(ContactResource::class),
                // tolto perchè appena creo un survey mi da errore non essendoci ancora nessun questionchart
                // \RyanChandler\FilamentProgressColumn\ProgressColumn::make('progress')
                //     ->progress(function ($record) {
                //         $questionCharts=$record->questionCharts;
                //         $valid=$questionCharts->filter(
                //             function ($item) {
                //                 return Storage::disk('public_html')->exists($item->img_src);
                //             }
                //         );

                //         return round(($valid->count() / $questionCharts->count()) * 100, 2);
                //     })
                //     //->color('warning')
                //     ,
                // Tables\Columns\IconColumn::make('pdf')
                //     ->label('PDF')
                //     ->boolean()
                //     //->toggleable()
                //     ->default(1)
                //     //->trueIcon('fluentui-document-pdf-20')
                //     ->trueIcon('heroicon-s-document')
                //     //->action(fn (SurveyPdf $record) => response()->download($record->generatePdf()))
                //     ->action(fn (SurveyPdf $record) => app(\Modules\Quaeris\Actions\SurveyPdf\MakePdfAction::class)->execute($record)),
            ])
            ->filters([
            ])
            ->actions([
                EditAction::make(),

                // Tables\Actions\Action::make('xls')
                //     ->action(function (SurveyPdf $record, array $data) {
                //         return app(AlertAction::class)->execute($record, $data['date_from'], $data['date_to']);
                //     })
                //     ->form([
                //         Forms\Components\DatePicker::make('date_from')->displayFormat('d/m/Y'),
                //         Forms\Components\DatePicker::make('date_to')->displayFormat('d/m/Y'),
                //         Forms\Components\Radio::make('xls')
                //                 // ->required()
                //                 ->options([
                //                     'alert' => 'Alert',
                //                     'email' => 'Email',
                //                     'optout' => 'Optout'
                //                 ])
                //     ]),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\QuestionChartsRelationManager::class,
            // RelationManagers\ContactsRelationManager::class,
            // RelationManagers\NotifyThemesRelationManager::class,
            // RelationManagers\ChartStyleRelationManager::class,
            // RelationManagers\PdfStyleRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSurveyPdfs::route('/'),
            'create' => CreateSurveyPdf::route('/create'),
            'edit' => EditSurveyPdf::route('/{record}/edit'),
            'question-charts' => Pages\ManageQuestionCharts::route('/{record}/question-charts'),
            'notify-themes' => Pages\ManageNotifyThemes::route('/{record}/notify-themes'),
            'charts' => Pages\ManageCharts::route('/{record}/charts'),
            'pdf-style' => Pages\ManagePdfStyle::route('/{record}/pdf-style'),
            'contacts' => Pages\ManageContacts::route('/{record}/contacts'),
        ];
    }

    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            // ...
            Pages\ManageQuestionCharts::class,
            Pages\ManageContacts::class,
            Pages\ManageNotifyThemes::class,
            Pages\ManageCharts::class,
            Pages\ManagePdfStyle::class,
        ]);
    }

    // da tema a tenant
    // public static function getEloquentQuery(): Builder
    // {
    //     Assert::notNull(auth()->user(), '['.__FILE__.']['.__LINE__.']');
    //     $current_team_id = auth()->user()->currentTeam?->getKey();
    //     return parent::getEloquentQuery()->where('customer_id', $current_team_id);
    // }

    public function hasCombinedRelationManagerTabsWithForm(): bool
    {
        return true;
    }
}
