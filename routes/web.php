<?php

use App\Livewire\About;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Dashboard;
use App\Livewire\GejalaSolusi;
use App\Livewire\PetunjukPenggunaan;
use App\Livewire\PetunjukPenggunaan1;
use App\Livewire\PetunjukPenggunaan2;
use App\Livewire\PetunjukPenggunaan3;
use App\Livewire\PetunjukPenggunaan4;
use App\Livewire\PetunjukPenggunaan5;
use App\Livewire\PetunjukPerawatan;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);
Route::get('/register', Register::class);
Route::get('/home', Dashboard::class);
Route::get('/about', About::class);
Route::get('/petunjuk-penggunaan', PetunjukPenggunaan::class);
// Route::get('/petunjuk-penggunaan1', PetunjukPenggunaan1::class);
Route::get('/petunjuk-penggunaan2', PetunjukPenggunaan2::class);
Route::get('/petunjuk-penggunaan3', PetunjukPenggunaan3::class);
Route::get('/petunjuk-penggunaan4', PetunjukPenggunaan4::class);
Route::get('/petunjuk-penggunaan5', PetunjukPenggunaan5::class);
Route::get('/petunjuk-perawatan', PetunjukPerawatan::class);
Route::get('/gejala-solusi', GejalaSolusi::class);

Route::get('/logout', function () {
    session()->forget('nama');
    session()->forget('username');
    echo '
        <script>
            alert("Anda telah berhasil logout.");
            window.location = "' . url('/') . '";
        </script>
    ';
});
