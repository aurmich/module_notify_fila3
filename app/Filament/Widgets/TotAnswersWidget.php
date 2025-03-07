<?php

namespace Modules\Quaeris\Filament\Widgets;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
// use Filament\Pages;
use Filament\Widgets\Widget;

class TotAnswersWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    public ?float $tot = null;

    public ?float $sms = null;

    public ?float $emails = null;

    public ?string $title = 'Totale Risposte';

    public array $stats;

    // use Pages\Concerns\HasActions;

    protected static string $view = 'quaeris::filament.widgets.stats';

    // /**
    //  * @var int | string | array<string, int | null>
    //  */
    // protected int|string|array $columnSpan = 2;

    public function mount(): void
    {
        $this->tot = $this->stats['tot'][0] ?? 0;
        $this->sms = $this->stats['sms'][0] ?? 0;
        $this->emails = $this->stats['emails'][0] ?? 0;
    }
}
