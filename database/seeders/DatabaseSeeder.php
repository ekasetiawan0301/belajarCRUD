<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::create([
            'nama' => 'eka setiawan',
            'hp' => '08123334445'
        ]);
        Anggota::create([
            'nama' => 'danuarta',
            'hp' => '0812333787'
        ]);
        Anggota::create([
            'nama' => 'danuarta',
            'hp' => '0812333787'
        ]);
        Anggota::create([
            'nama' => 'danuarta',
            'hp' => '0812333787'
        ]);
        Anggota::create([
            'nama' => 'wily andrian',
            'hp' => '089087887'
        ]);
    }
}
