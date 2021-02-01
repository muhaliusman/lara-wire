<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
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

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->to(config('larawire.redirect_if_authenticated'));
        }

        session()->flash('unauthenticate', 'Ups, your email or password is wrong !!');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
