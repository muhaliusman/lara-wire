<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;
use Livewire\WithPagination;

class AppComponent extends Component
{
    use WithPagination;

    public $component;

    protected $listeners = ['changeComponent'];

    public function mount(...$params)
    {
        if (count($params) < 1) {
            $component = config('larawire.root_component');
        } else {
            $component = implode('.', $params);
        }

        if (!$this->checkClassAvailibility($component)) {
            // cek sekali lagi dengan asumsi ada class index di dalamnya
            $component .= '.index';
            if (!$this->checkClassAvailibility($component)) {
                abort(404);
            }
        }
        $this->emit('setActiveComponent', $component);
        $this->component = $component;
    }

    public function render()
    {
        return view('livewire.base.app-component')
            ->layout('layouts.app', ['component' => $this->component]);
    }

    public function changeComponent($component)
    {
        $this->component = $component;
    }

    private function checkClassAvailibility($component)
    {
        $arrComp = explode('.', $component);
        $class = config('livewire.class_namespace');
        foreach ($arrComp as $comp) {
            $class .= '\\' . str_replace(' ', '', ucwords(str_replace('-', ' ', $comp)));
        }

        return class_exists($class);
    }
}
