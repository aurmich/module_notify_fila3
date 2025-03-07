<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Quaeris\Actions\SurveyPdf;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Quaeris\Actions\QuestionChart\MakeImgByQuestionChartModel2Action;
use Modules\Quaeris\Datas\AnswersFilterData;
use Modules\Quaeris\Models\SurveyPdf;
use Spatie\QueueableAction\QueueableAction;
use Spipu\Html2Pdf\Html2Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use function Safe\date;
use function Safe\strtotime;

class MakePdf2Action
{
    use QueueableAction;

    /**
     * @return View|BinaryFileResponse
     */
    public function execute(SurveyPdf $surveyPdf, ?AnswersFilterData $answersFilterData = null)
    {
        // non serve fare autoload separato
        // include_once realpath(__DIR__.'/../../../Xot/Services/vendor/autoload.php');
        $html2pdf = new Html2Pdf('L', 'A4', 'it');
        $questionCharts = $surveyPdf->questionCharts->where('show_on_pdf', 1);
        foreach ($questionCharts as $questionChart) {
            app(MakeImgByQuestionChartModel2Action::class)
                ->execute($questionChart, $answersFilterData);
        }

        $html = app(MakeHtmlBySurveyPdfModelAction::class)->execute($surveyPdf, $answersFilterData);
        if (request('debug', false)) {
            return $html;
        }

        $survey_date_to = $answersFilterData !== null ? $answersFilterData->date_to : $surveyPdf->date_to;
        if ($survey_date_to === null || $survey_date_to === '0000-00-00') {
            $survey_date_to = date('W / o');
        } else {
            $survey_date_to = date('W / o', strtotime((string) $survey_date_to));
        }

        $filename = Str::slug($surveyPdf->name.'_sett_'.$survey_date_to).'.pdf';
        // $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
        if ($html instanceof View) {
            $html = $html->render();
        }

        $html2pdf->writeHTML($html);
        // $filename = 'my_doc.pdf';
        $path = Storage::disk('cache')->path($filename);
        $html2pdf->output($path, 'F');
        $res = $html2pdf->output($path, 'F');
        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($path, $filename, $headers);
    }
}
