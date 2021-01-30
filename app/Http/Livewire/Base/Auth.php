<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;

class Auth extends Component
{
    public $component;

    protected $listeners = ['changeComponent'];

    public function mount($component)
    {
        $compName = 'auth.' . $component;
        $class = config('livewire.class_namespace') . '\\Auth\\' . str_replace(' ', '', ucwords(str_replace('-', ' ', $component)));

        if (!class_exists($class)) {
            abort(404);
        }

        $this->component = $compName;
    }

    public function render()
    {
        return view('livewire.base.auth')
            ->layout('layouts.auth');
    }
}
