<?php

namespace Modules\Quaeris\Filament\Widgets;

use Filament\Forms\Concerns\InteractsWithForms;
// use Filament\Pages;
use Filament\Widgets\Widget;

class SurveysSentWidget extends Widget // implements Forms\Contracts\HasForms
{
    use InteractsWithForms;

    public ?float $tot = null;

    public ?float $sms = null;

    public ?float $emails = null;

    public ?string $title = 'Sondaggi Inviati';

    public array $stats;

    // use Pages\Concerns\HasActions;

    protected static string $view = 'quaeris::filament.widgets.stats';

    // /**
    //  * @var int | string | array<string, int | null>
    //  */
    // protected int|string|array $columnSpan = 'sm';

    public function mount(): void
    {
        $this->tot = $this->stats['tot'][0] ?? 0;
        $this->sms = $this->stats['sms'][0] ?? 0;
        $this->emails = $this->stats['emails'][0] ?? 0;
    }
}
