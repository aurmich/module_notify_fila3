<?php

declare(strict_types=1);

namespace Modules\Media\Http\Livewire\VideoEditor;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

/**
 * Class Slider.
 */
class Slider extends Component {
    public string $driver = 'noui';
    public array $attrs = [];
    public float $min = 0;
    public float $max = 100;
    public array $values = [0, 100];

    protected $listeners = [
        'setSliderMinMax' => 'setMinMax',
        'setSliderValues' => 'setValues',
        'test' => 'test',
    ];

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function mount(string $id, ?string $driver = null) {
        if (null !== $driver) {
            $this->driver = $driver;
        }
        $this->attrs['id'] = $id;
    }

    /**
     * Undocumented function.
     */
    public function render(): Renderable {
        $view = 'media::livewire.video-editor.slider.'.$this->driver;
        $view_params = [
            'view' => $view,
        ];

        return view()->make($view, $view_params);
    }

    /**
     * Set min - max of slider.
     */
    public function setMinMax(float $min, float $max) {
        $this->min = $min;
        $this->max = $max;
        $this->dispatchBrowserEvent('setSliderMinMax', ['min' => $min, 'max' => $max]);
    }

    /**
     * set values of range.
     */
    public function setValues(array $values) {
        $this->values = $values;
        $this->dispatchBrowserEvent('setSliderValues', ['values' => $values]);
    }

    public function updateValues(array $values) {
        $this->values = $values;
        $this->emit('updateSliderValues', $values);
        $this->emit('updateSliderValues', $values);
    }

    // * 4 debug
    public function test() {
        dddx($this->values);
    }

    // */
}
