<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perpustakaan;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perpustakaan::create([
            'nama' => 'Perpustakaan A',
            'alamat' => 'Jalan Merdeka No. 1',
            'jumlah_buku' => 5000,
        ]);

        Perpustakaan::create([
            'nama' => 'Perpustakaan B',
            'alamat' => 'Jalan Harmoni No. 10',
            'jumlah_buku' => 7500,
        ]);

        Perpustakaan::create([
            'nama' => 'Perpustakaan C',
            'alamat' => 'Jalan Sudirman No. 15',
            'jumlah_buku' => 10000,
        ]);
    }
}