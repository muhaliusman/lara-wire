<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;

class AuthComponent extends Component
{
    public function render()
    {
        return view('livewire.base.auth-component')
            ->layout('layouts.auth');
    }
}
