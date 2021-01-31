<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $component;

    protected $listeners = ['changeComponent', 'logout'];

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

        $this->component = $component;
    }

    public function render()
    {
        return view('livewire.base.main')
            ->layout('layouts.app', ['component' => $this->component]);
    }

    public function changeComponent($component)
    {
        $this->component = $component;
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->to('/auth/login');
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
