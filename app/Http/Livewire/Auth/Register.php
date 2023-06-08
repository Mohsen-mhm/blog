<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        dd($this->name, $this->email, $this->password, $this->password_confirmation);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
