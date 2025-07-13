<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan seeder dalam urutan yang tepat
        $this->call([
            UserSeeder::class,
            MatakuliahSeeder::class,
            JadwalSeeder::class,
            EventSeeder::class,
            JadwalNonAkademikSeeder::class,
            UKMSeeder::class,
        ]);
    }
}
