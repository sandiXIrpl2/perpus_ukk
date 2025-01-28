<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan nama model (optional)
    protected $table = 'anggotas';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'alamat',
    ];

    // Jika Anda ingin mengatur nama kolom yang berfungsi untuk timestamps, Anda bisa menggunakan:
    // public $timestamps = false; // jika tidak menggunakan timestamps
    
    // Anda juga bisa menambahkan relasi jika ada, misalnya relasi dengan model lain:
    // public function transaksi()
    // {
    //     return $this->hasMany(Transaksi::class);
    // }
}