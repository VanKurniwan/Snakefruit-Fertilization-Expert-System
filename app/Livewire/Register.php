<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Userdata;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('components.blank-layout')]
#[Title('SFES - Snakefruit Fertilization Expert System')]
class Register extends Component
{
    public $username;
    public $nama;
    public $umur;
    public $pekerjaan;
    public $alamat;
    public $notelp;

    #[Rule('required|min:8|max:50')]
    public $password;
    #[Rule('required|min:8|max:50')]
    public $repassword;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'username' => 'required',
            'nama' => 'required',
            'umur' => 'required|integer',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|min:8',
        ]);
    }

    public function register()
    {
        $this->validate([
            'username' => 'required',
            'nama' => 'required',
            'umur' => 'required|integer',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'notelp' => 'required',
            'password' => 'required|min:8',
            'repassword' => 'required|min:8',
        ]);

        // Check if password and re-password match
        if ($this->password !== $this->repassword) {
            session()->flash('error', 'Password anda tidak sesuai');
            return;
        }

        // Check if username already exists
        $checkUsername = Userdata::where('username', $this->username)->first();
        if ($checkUsername) {
            session()->flash('error', 'Username telah digunakan');
            return;
        }

        // Save to database
        $registerData = new Userdata();
        $registerData->username = $this->username;
        $registerData->password = $this->password; // Hash the password
        $registerData->nama = $this->nama;
        $registerData->umur = $this->umur;
        $registerData->pekerjaan = $this->pekerjaan;
        $registerData->alamat = $this->alamat;
        $registerData->notelp = $this->notelp;

        $registerData->save();

        session()->put('nama', $this->nama);

        return redirect('/home');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
