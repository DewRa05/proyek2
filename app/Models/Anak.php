<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table = 'anak';

    protected $fillable = [
        'namaLengkap' ,
        'jenisKelamin',
        'umur',
        'noKk',
        'alamat',
        'namaIbu', 
        'tb' ,
        'bb',
        'hasil',
    ];
}
