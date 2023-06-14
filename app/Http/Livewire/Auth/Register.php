<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = new User();
    }

    protected $rules = [
        'user.name' => ['required', 'string', 'min:3'],
        'user.username' => ['required', 'string', 'regex:/^[A-Za-z0-9]+(?:[_-][A-Za-z0-9]+)*$/', 'min:5', 'max:30', 'unique:users,username'],
        'user.email' => ['required', 'email', 'unique:users,email'],
        'user.password' => ['required', 'min:8'],
        'user.password_confirmation' => ['required', 'same:user.password'],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();

        unset($this->user->password_confirmation);
        $this->user->password = Hash::make($this->user->password);
        $this->user->save();

        Auth::login($this->user, true);
        return redirect()->route('home', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
