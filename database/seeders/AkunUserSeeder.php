<?php

namespace Database\Seeders;

use App\Models\AkunUser;
use Illuminate\Database\Seeder;

class AkunUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AkunUser::create([
            'NamaLengkap' => 'Dewi Ramdani',
            'username' => 'Dera05',
            'nik' => '1234567987456745',
            'noKK' => '2345678903123456',
            'email' => 'dera@gmail.com',
            'password' => 'Dera1234',
        ]);
    }
}
