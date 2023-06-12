<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
