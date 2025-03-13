<?php

namespace Modules\Limesurvey\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Support\RawJs;

class ChartItemWidget extends ChartWidget
{
    public string $type;
    public array $chartData;
    public ?string $chartTitle = null;
    public ?string $chartDescription = null;
    public string|RawJs|null $chartOptions = null;

    protected static ?string $pollingInterval = null;
    protected static string $color = 'info';
    protected static ?string $maxHeight = '300px';

    public function mount(): void
    {
        if (!isset($this->type) || !isset($this->chartData)) {
            throw new \Exception('Chart type and data must be set');
        }
    }

    protected function getData(): array
    {
        return $this->chartData;
    }

    protected function getType(): string
    {
        return $this->type;
    }

    public function getHeading(): ?string
    {
        return $this->chartTitle;
    }

    public function getDescription(): ?string
    {
        return $this->chartDescription;
    }

    protected function getOptions(): ?RawJs
    {
        if ($this->chartOptions === null) {
            return null;
        }

        if ($this->chartOptions instanceof RawJs) {
            return $this->chartOptions;
        }

        return RawJs::make('{' . $this->chartOptions . '}');
    }
}