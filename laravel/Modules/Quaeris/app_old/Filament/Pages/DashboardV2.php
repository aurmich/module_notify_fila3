<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Pages;

use Filament\Actions;
use Filament\Facades\Filament;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
use Modules\Quaeris\Actions\Dashboard\StatsAction;
use Modules\Quaeris\Actions\QuestionChart\SetMixedChartId;
use Modules\Quaeris\Datas\DashboardFilterData;
use Modules\Quaeris\Filament\Widgets;
use Modules\Quaeris\Models\QuestionChart;
use Modules\Quaeris\Models\SurveyPdf;
use Modules\UI\Filament\Widgets as UIWidgets;
use Modules\UI\Filament\Widgets\OverlookWidget;
use Modules\UI\Filament\Widgets\RowWidget;
use Spatie\Url\Url;
use Webmozart\Assert\Assert;

class DashboardV2 extends BaseDashboard
{
    use HasFiltersForm;

    public string $url = '#';
    public DashboardFilterData $filters_data;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $routePath = 'v2';
    protected static ?string $title = 'Dashboard';
    protected static ?int $navigationSort = 2;
    protected static ?string $pollingInterval = null;
    /*
    public array $survey_pdf_opts = [];
    public array $question_filter_opts = [];
    public bool $question_filter_visible = false;
    */
    // protected $listeners = ['refresh' => '$refresh'];

    public function mount(): void
    {
        $this->url = request()->fullUrl();
        $filters = DashboardFilterData::fromArray($this->filters ?? []);

        $this->filters = Arr::except($filters->toArray(), ['survey_pdf_opts']);
        // $this->survey_pdf_opts = $filters->getSurveyPdfOpts();
        // $this->question_filter_opts = $filters->getQuestionFilterOpts();
        // $this->question_filter_visible = $filters->getQuestionFilterVisible();
        $this->filters_data = $filters;
    }

    /**
     * Undocumented function
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function reloadPage(string $url)
    {
        return redirect($url);
    }

    public function getColumns(): int|string|array
    {
        return [
            'md' => 1,
            'xl' => 2,
        ];
    }

    public function filtersForm(Form $form): Form
    {
        // ->stateBindingModifiers(['defer'])

        return $form
            ->schema(
                [
                    Section::make()->schema(
                        $this->filters_data->getFiltersFormArray()
                    )->columns(4),
                ]
                // ->statePath('formData')
            );
    }

    public function getWidgets(): array
    {
        $widgets = [];
        $survey_pdf_id = Arr::get($this->filters ?? [], 'survey_pdf_id', null);
        $survey_pdf = SurveyPdf::with(['questionCharts', 'questionCharts.extra'])
            ->firstWhere(['id' => $survey_pdf_id]);

        static::$title = $survey_pdf?->name;
        if ($survey_pdf === null) {
            return [];
        }

        $questionCharts = $survey_pdf->questionCharts
            ->where('show_on_pdf', true)
            ->sortBy('pos')

        ;

        $group_questionCharts = $questionCharts->groupBy('group_title');

        foreach ($group_questionCharts as $group => $questionCharts) {
            $widgets[] = UIWidgets\HeroWidget::make(['title' => $group, 'icon' => 'heroicon-o-rectangle-stack']);
            foreach ($questionCharts as $question_chart) {
                $title = trans($question_chart->full_question_txt);
                $sub_widgets = $this->getQuestionChartWidgets($question_chart);
                $widget = UIWidgets\GroupWidget::make(['title' => $title, 'icon' => 'heroicon-o-chart-pie', 'widgets' => $sub_widgets]);
                $widgets[] = $widget;
            }
        }

        return $widgets;
    }

    public function getQuestionChartWidgets(QuestionChart $question_chart): array
    {
        $widgets = [];

        app(SetMixedChartId::class)->execute($question_chart);
        // if ($question_chart->mixed_chart_id === null) {
        //     $type = $question_chart->chart->type;
        //     $mixed = MixedChart::firstWhere(['name' => $type]);

        //     if ($mixed === null) {
        //         $mixed = MixedChart::create(['name' => $type]);
        //         $chart = $question_chart->chart->replicate();
        //         $chart->save();
        //         $mixed->charts()->saveMany([$chart]);
        //     }

        //     $question_chart->update([
        //         'mixed_chart_id' => $mixed->id,
        //     ]);

        //     if ($mixed->charts->count() === 0) {
        //         $chart = $question_chart->chart->replicate();
        //         $chart->save();
        //         $mixed->charts()->saveMany([$chart]);
        //     }
        // }

        //dddx([$question_chart, $question_chart->charts()->toSql()]);
        foreach ($question_chart->charts as $chart_index => $chart) {
            $widgets[] = [
                'class' => Widgets\QuestionChartItemWidget::class,
                'properties' => [
                    'question_chart' => $question_chart,
                    // 'question_chart_id'=>$this->question_chart_id,
                    'chart_index' => $chart_index,
                    'filter_data' => $this->filters,
                ],
            ];
        }

        return $widgets;
    }

    /**
     * Undocumented function
     *
     * @param string                $name
     * @param string|int|array|null $value
     *
     * @return void
     */
    public function updated($name, $value)
    {
        if ($name === 'filters.survey_pdf_id') {
            $this->filters['survey_pdf_id'] = $value;
            $url = Url::fromString($this->url);
            $url = $url->withQueryParameters(['filters' => $this->filters]);
            $url = urldecode((string) $url);
            $this->reloadPage($url);
        }
        data_set($this, $name, $value);
        $this->dispatch('filterUpdate', $this->filters);
    }

    public function refreshPage(): void
    {
        if ($this->filters === null) {
            return;
        }

        $params = [
            'filters' => $this->filters,
        ];

        $url = self::getUrl($params);
        $url = urldecode((string) $url);
        $this->reloadPage($url);
    }

    public static function canAccess(): bool
    {
        Assert::isArray($filters = request()->get('filters') ?? [], '['.__LINE__.']['.__FILE__.']');
        if (empty($filters)) {
            return true;
        }
        $survey_pdf_id = $filters['survey_pdf_id'];
        $survey_pdf = SurveyPdf::firstWhere(['id' => $survey_pdf_id]);

        return Gate::allows('dashboard', $survey_pdf);
    }

    protected function getHeaderActions(): array
    {
        Assert::notNull(Filament::getTenant());
        return [
            Actions\Action::make('Esporta')
                ->icon('heroicon-o-document-arrow-down')
                ->url(function () {
                    //$url = Url::fromString($this->url);
                    $url = Url::fromString('/quaeris/admin/'.Filament::getTenant()->slug.'/export-page');
                    $url = $url->withQueryParameters(['filters' => $this->filters]);
                    return urldecode((string) $url);
                }),
            //ExportsAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        if ($this->filters === null) {
            return [];
        }

        $widgets = [];
        $stats = app(StatsAction::class)->execute($this->filters);

        foreach ($stats as $key => $stat) {
            $widgets[] = OverlookWidget::make(
                [
                    'title' => ucfirst($key),
                    'icon' => $stat['icon'],
                    'stats' => [
                        [
                            'icon' => 'heroicon-o-paper-airplane',
                            'label' => 'Inviti',
                            'value' => $stat['invited'][0] ?? 0,
                        ],
                        [
                            'icon' => 'heroicon-o-pencil-square',
                            'label' => 'Partecipanti',
                            'value' => $stat['answers'][0] ?? 0,
                        ],
                        [
                            // 'icon' =>'fas-percentage',
                            'icon' => 'heroicon-o-receipt-percent',
                            'label' => 'Percentuale',
                            'value' => $stat['perc'][0] ?? 0,
                        ],
                    ],
                ]
            );
        }

        $widgets = Arr::map($widgets, static function ($item) {
            return [
                'class' => $item->widget,
                'properties' => $item->getProperties(),
            ];
        });

        return [
            RowWidget::make(['widgets' => $widgets]),
        ];
    }
}
