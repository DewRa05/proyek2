<?php

namespace Database\Seeders;

use App\Models\Anak;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Anak::create([
        'namaLengkap' => 'Dewi Ramdani' ,
        'jenisKelamin'=> 'perempuan',
        'umur'=> '3',
        'noKk' => '1234564444',
        'alamat' => 'larangan',
        'namaIbu'=> 'sukasih', 
        'tb' => '155',
        'bb' => '67',
        'hasil' => 'kurus',
        ]);
    }
}
