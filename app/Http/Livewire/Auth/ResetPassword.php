<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class ResetPassword extends Component
{
    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    protected $rules = [
        'email' => 'required|email',
        'token' => 'required',
        'password' => 'required|min:8|confirmed',
    ];

    public function mount()
    {
        $this->email = request()->email;
        $this->token = request()->token;
    }

    public function submit()
    {
        $this->validate();

        $status = Password::reset([
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
            'token' => $this->token
        ], function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();

                $user->setRememberToken(Str::random(60));

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            $this->password = '';
            $this->password_confirmation = '';
            session()->flash('success',  __($status));
        } else {
            session()->flash('error',  __($status));
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
