<?php

namespace Modules\Quaeris\Filament\Resources\QuestionChartResource\Pages;

use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Modules\Quaeris\Actions\QuestionChart\MakeImgByQuestionChartModel2Action;
use Modules\Quaeris\Filament\Resources\QuestionChartResource;
use Modules\Quaeris\Models\QuestionChart;
use Webmozart\Assert\Assert;

class RegenImg2 extends Page
{
    use InteractsWithRecord;

    // //use \SevendaysDigital\FilamentNestedResources\ResourcePages\NestedPage;

    public static string $label = 'Custom Navigation Label';

    //public static $slug = 'custom-url-slug';

    public static ?string $title = 'Regenerate Image';

    protected static string $resource = QuestionChartResource::class;

    protected static string $view = 'quaeris::filament.resources.question-chart-resource.pages.regen-img-2';

    public function mount(string $record): void
    {
        Assert::notNull($user = auth()->user(), '['.__FILE__.']['.__LINE__.']');
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        // $this->record = $this->resolveRecord($record);
        $this->record = QuestionChart::find($record);
    }

    protected function getViewData(): array
    {
        Assert::isInstanceOf($questionChart = $this->record, QuestionChart::class);

        return app(MakeImgByQuestionChartModel2Action::class)
            ->execute($questionChart);

        // $q = $this->record;
        // $datas = app(\Modules\Quaeris\Actions\QuestionChart\GetChartsDataByQuestionChart::class)
        //     ->execute($q, false);

        // $filenames = [];

        // foreach ($datas as $k => $data_answers) {
        //     /**
        //      * @var \Modules\Chart\Datas\AnswersData
        //      */
        //     $da = $data_answers;
        //     $answers = $da->answers;
        //     $chart_style = $q->charts[$k];

        //     if (0 == $k) {
        //         $chart_style['title'] = app(GetTitleAction::class)->execute($q);
        //         $chart_style['subtitle'] = app(GetSubtitleAction::class)->execute($q);
        //         $chart_style['footer'] = app(GetFooterAction::class)->execute($q);
        //     }
        //     //if (!isset($chart_style['type']) && isset($chart_style['chart_type'])) {
        //     //    $chart_style['type']=$chart_style['chart_type'];
        //     //}

        //     //if ($chart_style['chart_type']!='' && $chart_style['type']=='') {
        //     //    $chart_style['type']=$chart_style['chart_type'];
        //     //}

        //     if (!isset($chart_style['type'])) {
        //         throw new \Exception('add mixed_chart and question_chart to config morp_class');
        //     };

        //     $chart_style = ChartData::from($chart_style);

        //     /*
        //     $engine = 'JpGraph\V1';

        //     $action = Str::studly($chart_style->type).'Action';

        //     $action_class = '\Modules\Chart\Actions\\'.$engine.'\\'.$action;
        //     */

        //     $action_class=$chart_style->getActionClass();

        //     $graph = app($action_class)->execute($answers, $chart_style);

        //     $filename = 'chart/'.$q->id.'-'.$k.'.png';
        //     $file_path = public_path($filename);
        //     if (File::exists($file_path)) {
        //         File::delete($file_path);
        //     }
        //     $graph->Stroke($file_path);
        //     $filenames[] = $filename;
        // }

        // $fileName = 'chart/'.$q->id.'.png';

        // app(\Modules\Media\Actions\Image\Merge::class)->execute($filenames, $fileName);

        // $q->img_src = $fileName;
        // $q->generated_at = now();
        // $q->save();

        // $view_params = [
        //     'q' => $q,
        //     'question_type' => $q->question_type,
        //     'field_name' => $q->field_name,
        //     'tot' => app(\Modules\Quaeris\Actions\QuestionChart\GetTot::class)->execute($q),
        //     'risp' => app(\Modules\Quaeris\Actions\QuestionChart\GetAnswersCount::class)->execute($q),
        //     'not_risp' => app(\Modules\Quaeris\Actions\QuestionChart\GetNotAnswersCount::class)->execute($q),
        //     'data' => $datas,
        //     // 'option' => $this->getOption($datas[0]),
        //     'option' => [],
        //     'filenames' => $fileName,
        // ];

        // return $view_params;
    }
}
