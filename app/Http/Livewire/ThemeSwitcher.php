<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ThemeSwitcher extends Component
{
    public $mode;

    protected $listeners = ['themeToggled'];

    public function mount()
    {
        $this->updateThemeMode();
    }

    public function toggleTheme()
    {
        $this->mode = ($this->mode === 'light') ? 'dark' : 'light';

        if (Auth::check()) {
            $user = Auth::user();
            $user->theme_mode = $this->mode;
            $user->save();
        } else {
            Session::put('theme_mode', $this->mode);
        }

        $this->emit('themeToggled', $this->mode);
    }

    public function themeToggled($mode)
    {
        $this->mode = $mode;
    }

    protected function updateThemeMode()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->mode = $user->theme_mode ?? 'light';
        } else {
            $this->mode = session('theme_mode', 'light');
            Session::put('theme_mode', 'light');
        }
    }

    public function render()
    {
        return view('livewire.theme-switcher');
    }
}
