<?php

declare(strict_types=1);

namespace Modules\Quaeris\Filament\Pages;

use Filament\Forms\Form;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\Quaeris\Models\SurveyPdf;
use Filament\Forms\Components\Section;
use Modules\Limesurvey\Models\LimeQuestion;
use Filament\Pages\Dashboard as BaseDashboard;
use Modules\Quaeris\Datas\DashboardFilterData;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AutoPage extends BaseDashboard
{
    use HasFiltersForm;

    public string $url = '#';
    public DashboardFilterData $filters_data;

    protected static ?string $title = 'Auto';
    protected static string $routePath = 'auto';

    protected static ?int $navigationSort = 300;

    public static function shouldRegisterNavigation(): bool
    {
        $user = Auth::user();

        // Controlla se l'utente è superadmin
        if (!Gate::allows('superadmin', $user)) {
            return false;
        }

        return true;
    }

    public function mount(): void
    {
        $user = Auth::user();

        // Controlla se l'utente è superadmin
        if (!Gate::allows('superadmin', $user)) {
            throw new HttpException(403, 'Forbidden');
        }

        $this->url = request()->fullUrl();
        $filters = DashboardFilterData::fromArray($this->filters ?? []);

        $this->filters = Arr::except($filters->toArray(), ['survey_pdf_opts']);
        $this->filters_data = $filters;
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

    /**
     * Undocumented function
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function reloadPage(string $url)
    {
        return redirect($url);
    }

    public function getWidgets(): array
    {
        $survey_pdf_id = Arr::get($this->filters ?? [], 'survey_pdf_id', null);
        $survey_pdf = SurveyPdf::with(['questionCharts', 'questionCharts.extra'])
            ->firstWhere(['id' => $survey_pdf_id]);
        Assert::notNull($survey_pdf);
        Assert::notNull($survey_pdf->survey_id);
        $widgets = [];

        $surveyId = $survey_pdf->survey_id;

        // Recupera le domande del sondaggio
        // $questions = LimeQuestion::where('sid', $surveyId)
        //     ->isLeaf()
        //     ->get()
        //     //->skip(1)
        //     ->take(1)
        // ;

        $questions = LimeQuestion::where('sid', $survey_pdf->survey_id)
            ->where('parent_qid', 0)
            ->whereNotIn('type', ['X'])
            ->get()
            ->sortBy(function ($item) {
                Assert::notNull($item->group, '['.__LINE__.']['.class_basename(self::class).']');
                return $item->group->group_order * 1000 + $item->question_order;
            })
            ->take(3)
        ;
        // dddx($questions);
        // Cicla attraverso ogni domanda e visualizza il widget appropriato
        foreach ($questions as $k => $question) {
            Assert::notNull($question->l10n);
            $data = [
                'title' => '['.$k.']['.$question->type.']'.$question->l10n->question,
                'surveyId' => $surveyId,
                'questionId' => $question->qid,
                'fieldName' => $question->field_name,
            ];

            $type = $question->type;

            if ($type === '!') {
                $type = 'ExclamationPoint';
            }
            $chart = '\Modules\Limesurvey\Filament\Widgets\Type'.$type;
            // dddx([$question, $chart, $data]);
            //if (! in_array($type, ['X','B','Y','T','ExclamationPoint','N'], false)) {
            $widgets[] = $chart::make($data);
            //}
            //dddx($question);
        }

        return $widgets;
    }
}
