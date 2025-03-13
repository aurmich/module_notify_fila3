<?php

namespace Modules\Quaeris\Filament\Widgets;

use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Arr;
use Filament\Tables\Actions;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Modules\Quaeris\Models\SurveyPdf;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Enums\FiltersLayout;
use Modules\Quaeris\Exports\QueryExport;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Concerns\InteractsWithTable;
use Modules\Limesurvey\Models\SurveyFlipResponse;
use Modules\Quaeris\Datas\AlertDashboardFilterData;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Modules\Limesurvey\Actions\PopulateSurveyFlipBySurveyIdAction;

/**
 * Undocumented class
 *
 * @property array $filters
 */
class AlertWidget extends BaseTableWidget
{
    public function getTableQuery(): \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Relations\Relation|null
    {

        app(PopulateSurveyFlipBySurveyIdAction::class)
            ->onQueue()
            ->execute($this->getSurveyId());


        Assert::isArray($this->filters);
        $filter_data = AlertDashboardFilterData::from($this->filters);
        // dddx([$this->filters, $filter_data]);


        // return SurveyFlipResponse::where('survey_id', $this->getSurveyId())
        //     ->join('lime_tokens_'.$this->getSurveyId(), 'survey_flip_responses.token', '=', 'lime_tokens_'.$this->getSurveyId().'.token')
        //     ->ofAlertDashboardFilterData($filter_data)
        // ;

        // dddx(
        //     SurveyFlipResponse::where('survey_id', $this->getSurveyId())
        //         ->join('lime_tokens_' . $this->getSurveyId(), 'survey_flip_responses.token', '=', 'lime_tokens_' . $this->getSurveyId() . '.token')
        //         ->join('lime_questions', 'survey_flip_responses.question_id', '=', 'lime_questions.qid')
        //         ->join('lime_question_l10ns', 'lime_questions.qid', '=', 'lime_question_l10ns.qid')
        //         ->leftJoin('lime_questions as parent_questions', 'lime_questions.parent_qid', '=', 'parent_questions.qid')
        //         ->leftJoin('lime_question_l10ns as parent_lime_question_l10ns', 'parent_questions.qid', '=', 'parent_lime_question_l10ns.qid')
        //         ->select(
        //             'survey_flip_responses.*',
        //             DB::raw('CONCAT(
        //                 COALESCE(REGEXP_REPLACE(parent_lime_question_l10ns.question, "<[^>]*>", ""), ""),
        //                 " ",
        //                 REGEXP_REPLACE(lime_question_l10ns.question, "<[^>]*>", "")
        //             ) as full_question')
        //         )
        //     ->ofAlertDashboardFilterData($filter_data)->toSql()
        // );


        return
            SurveyFlipResponse::where('survey_id', $this->getSurveyId())
                ->join('lime_tokens_' . $this->getSurveyId(), 'survey_flip_responses.token', '=', 'lime_tokens_' . $this->getSurveyId() . '.token')
                ->join('lime_questions', 'survey_flip_responses.question_id', '=', 'lime_questions.qid')
                ->join('lime_question_l10ns', 'lime_questions.qid', '=', 'lime_question_l10ns.qid')
                ->leftJoin('lime_questions as parent_questions', 'lime_questions.parent_qid', '=', 'parent_questions.qid')
                ->leftJoin('lime_question_l10ns as parent_lime_question_l10ns', 'parent_questions.qid', '=', 'parent_lime_question_l10ns.qid')
                ->select(
                    'survey_flip_responses.*',
                    DB::raw('CONCAT(
                        COALESCE(REGEXP_REPLACE(parent_lime_question_l10ns.question, "<[^>]*>", ""), ""),
                        " ",
                        REGEXP_REPLACE(lime_question_l10ns.question, "<[^>]*>", "")
                    ) as full_question')
                )
            ->ofAlertDashboardFilterData($filter_data);


        // return SurveyFlipResponse::where('survey_id', $this->getSurveyId())
        //     ->join('lime_tokens_' . $this->getSurveyId(), 'survey_flip_responses.token', '=', 'lime_tokens_' . $this->getSurveyId() . '.token')
        //     ->join('lime_questions', 'survey_flip_responses.question_id', '=', 'lime_questions.qid')
        //     ->join('lime_question_l10ns', 'lime_questions.qid', '=', 'lime_question_l10ns.qid')
        //     ->select('survey_flip_responses.*', 'lime_question_l10ns.question')
        //     ->ofAlertDashboardFilterData($filter_data);

    }

    protected function getTableHeaderActions(): array
    {
        return [
            Actions\Action::make('populate')
                //->requiresConfirmation()
                ->action(fn ($data) => app(PopulateSurveyFlipBySurveyIdAction::class)->execute($this->getSurveyId()))
                ->icon('heroicon-o-plus')
                ->color('success'),

            Actions\Action::make('export-table-xls')
                ->label('')
                ->icon('fas-file-excel')
                ->action(function () {

                    $fields = [
                        'id',
                        'old_id',
                        'answer',
                        'value',
                        'submitdate',
                        'feedback',
                        'full_question',
                        'question_id',
                        'question_type',
                        'fieldname',
                        'token',
                        'email',
                    ];

                    $query = $this->getTableQuery();
                    $filename = class_basename($this) . '_' . $this->getSurvey()->name . '.xlsx';
                    return (new QueryExport($query, null, $fields))
                        ->download($filename);
                }),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('old_id')->toggleable(isToggledHiddenByDefault: true),
            //Tables\Columns\TextColumn::make('survey_id'),
            Tables\Columns\TextColumn::make('answer')
                ->wrap()
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('value'),
            // Tables\Columns\TextColumn::make('participant_id'),
            Tables\Columns\TextColumn::make('submitdate'),
            Tables\Columns\TextColumn::make('feedback')->wrap(),
            // Tables\Columns\TextColumn::make('question.text')->wrap(),
            Tables\Columns\TextColumn::make('full_question'),
            Tables\Columns\TextColumn::make('question_id')->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('question_type')->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('fieldname')->wrap()->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('token')->searchable(['survey_flip_responses.token'])->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('email')->searchable(),



        ];
    }
}
