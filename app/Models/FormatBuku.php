<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatBuku extends Model
{
    protected $table = 'format_bukus';
    
    // Add any fillable fields or relationships
    protected $fillable = ['nama', 'deskripsi'];
}
