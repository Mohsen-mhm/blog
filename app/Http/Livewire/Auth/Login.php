<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $user;

    protected $rules = [
        'user.email' => ['required', 'email'],
        'user.password' => ['required', 'min:8'],
        'user.remember' => ['nullable'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $this->validate();

        $remember = $this->user['remember'] ?? false;

        $credentials = [
            'email' => $this->user['email'],
            'password' => $this->user['password'],
        ];

        if (Auth::attempt($credentials, $remember)) {
            // Authentication success
            return redirect()->route('home', app()->getLocale());
        }
        // Authentication failed
        $this->addError('user.email', 'Invalid email or password.');
        $this->addError('user.password', 'Invalid email or password.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
