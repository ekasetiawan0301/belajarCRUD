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
            'nama' => 'Eka setiawan',
            'hp' => '08123334445'
        ]);
        Anggota::create([
            'nama' => 'Danuarta',
            'hp' => '08132525245'
        ]);
        Anggota::create([
            'nama' => 'willy andrian',
            'hp' => '08123334445'
        ]);
        Anggota::create([
            'nama' => 'Arnanda',
            'hp' => '08123334445'
        ]);
    }
}
