<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'tanggal',
        'jam',
        'tempat',
        'penulis',
        'berita',
        'gambar',
    ];
}
