<?php

namespace App\Http\Livewire\Users;

use App\Traits\AuthorizeComponent;
use Livewire\Component;

class Create extends Component
{
    use AuthorizeComponent;

    public $name;
    protected $auth = true;

    public function render()
    {
        return view('livewire.users.create');
    }
}
