<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggota_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];

    // Relasi dengan model Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    // Relasi dengan model Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}