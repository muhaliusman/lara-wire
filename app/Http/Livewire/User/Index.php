<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Index extends Component
{
    public $title = 'List User';

    public function render()
    {
        return view('livewire.user.index');
    }
}
