<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan anggota baru
        Anggota::create([
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'alamat' => 'Jl. Sudirman No. 1',
        ]);
    }
}