<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login - Defaka')]
class LoginPage extends Component
{
    public $email = '';
    public $password = '';

    public function mount()
    {
        $this->email = '';
        $this->password = '';
    }

    
    public function save()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        if (!Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->flash('error', 'Email atau password salah.');
            return;
        }
        $this->dispatch('loginSuccess');

        $user = auth()->user();

        if ($user->role === 'admin') {
            return redirect('/admin'); 
        }
        
        return redirect()->intended('/');
    }

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
