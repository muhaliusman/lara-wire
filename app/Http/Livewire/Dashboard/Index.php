<?php

namespace App\Http\Livewire\Dashboard;

use App\Traits\AuthorizeComponent;
use Livewire\Component;

class Index extends Component
{
    use AuthorizeComponent;

    public $title = 'Dashboard';

    protected $auth = true;
    protected $permissions = [
        'dashboard'
    ];

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
