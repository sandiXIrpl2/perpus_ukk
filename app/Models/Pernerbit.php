<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernerbit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}