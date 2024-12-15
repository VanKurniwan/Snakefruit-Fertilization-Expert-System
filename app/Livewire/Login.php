<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Userdata;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.blank-layout')]
#[Title('SFES - Snakefruit Fertilization Expert System')]
class Login extends Component
{
    public $username;
    public $password;

    public function login()
    {
        // Validasi hanya untuk username dan password
        $this->validate([
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        // Check if username already exists
        $checkUser = Userdata::where('username', $this->username)
            ->where('password', $this->password)
            ->first();
        // dd($checkUser);
        if ($checkUser) {
            session()->put('nama', $checkUser->nama);
            session()->put('username', $checkUser->username);

            return redirect('/home');
        } else {
            session()->flash('error', 'Username atau Password salah');
            return;
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}