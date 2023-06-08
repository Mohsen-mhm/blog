<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        dd($this->email, $this->password);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
