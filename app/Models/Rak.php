<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'lokasi']; // Tambahkan atribut yang diizinkan untuk mass assignment
}

