<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;
use Livewire\WithPagination;

class AppComponent extends Component
{
    use WithPagination;

    public $component = 'dashboard.index';

    protected $listeners = ['changeComponent'];

    public function mount($folder = 'dashboard', $component = 'index')
    {
        $foldName = str_replace(' ', '', ucwords(str_replace('-', ' ', $folder)));
        $compName = str_replace(' ', '', ucwords(str_replace('-', ' ', $component)));
        $class = config('livewire.class_namespace') . '\\' . $foldName . '\\' . $compName;

        if (!class_exists($class)) {
            abort(404);
        }

        $this->component = $folder . '.' . $component;
    }

    public function render()
    {
        return view('livewire.base.app-component')
            ->layout('layouts.app', ['title' => 'List User']);
    }

    public function changeComponent($component)
    {
        $this->component = $component;
    }
}
