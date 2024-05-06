<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunUser extends Model
{
    use HasFactory;
    protected $table = 'akunuser';
    protected $fillable = [
        'namaLengkap',
        'username',
        'nik',
        'noKK',
        'email',
        'password',
    ];
}
