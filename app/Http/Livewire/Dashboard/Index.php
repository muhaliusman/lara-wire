<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public $title = 'Dashboard';

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
