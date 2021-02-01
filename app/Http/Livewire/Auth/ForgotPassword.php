<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'email|exists:users,email',
    ];

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }

    public function submit()
    {
        $this->validate();

        $status = Password::sendResetLink([
            'email' => $this->email
        ]);

        $status === Password::RESET_LINK_SENT
                ? session()->flash('success', __($status))
                : session()->flash('error', __($status));
    }
}
