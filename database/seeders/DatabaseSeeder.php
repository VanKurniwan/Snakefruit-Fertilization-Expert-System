<?php

namespace Database\Seeders;

use App\Models\RepresentasiPengetahuan;
use App\Models\User;
use App\Models\Userdata;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Userdata::firstOrCreate([
            'username'  => 'IvanK',
            'password'  => 'IvanKurniawan070',
            'nama'      => 'Ivan Kurniawan',
            'umur'      => '21',
            'pekerjaan' => 'Mahasiswa',
            'alamat'    => 'Kembang, Wonokerto, Turi, Sleman, DI Yogyakarta',
            'notelp'    => '081215708319',
        ]);

        Userdata::firstOrCreate([
            'username'  => 'Admin',
            'password'  => 'PupukSalak070',
            'nama'      => 'Admin',
            'umur'      => '21',
            'pekerjaan' => 'Mahasiswa',
            'alamat'    => 'Kembang, Wonokerto, Turi, Sleman, DI Yogyakarta',
            'notelp'    => '081215708319',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g01',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => 0.7,
            'p07' => 0.6,
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g02',
            'p01' => 0.8,
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g03',
            'p01' => '',
            'p02' => '',
            'p03' => 0.8,
            'p04' => 0.7,
            'p05' => '',
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g04',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => '',
            'p07' => '',
            'p08' => 0.8,
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g05',
            'p01' => '',
            'p02' => 0.6,
            'p03' => '',
            'p04' => '',
            'p05' => 0.5,
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g06',
            'p01' => 0.6,
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => 0.8,
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g07',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => '',
            'p07' => 0.7,
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g08',
            'p01' => 0.7,
            'p02' => 0.8,
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g09',
            'p01' => '',
            'p02' => '',
            'p03' => 0.6,
            'p04' => 0.6,
            'p05' => '',
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g10',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => 0.8,
            'p05' => 0.7,
            'p06' => '',
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g11',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => 0.8,
            'p07' => '',
            'p08' => '',
        ]);

        RepresentasiPengetahuan::firstOrCreate([
            'kodeGejala' => 'g12',
            'p01' => '',
            'p02' => '',
            'p03' => '',
            'p04' => '',
            'p05' => '',
            'p06' => '',
            'p07' => 0.8,
            'p08' => '',
        ]);
    }
}
