<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::create([
            'tanggal' => Carbon::createFromFormat('d/m/Y', '25/12/2024')->format('Y-m-d'),
            'jam' => '23:00',
            'acara' => 'suntik lintang',
            'tempat' => 'lohbener',
        ]);
    }
}
