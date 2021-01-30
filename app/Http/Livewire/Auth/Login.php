<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'email|required',
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        return redirect()->to(config('larawire.redirect_to'));
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
