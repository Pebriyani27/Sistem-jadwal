<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Akun Kaprodi
        User::updateOrCreate(
            ['email' => 'kaprodi@example.com'],
            [
                'name' => 'Kaprodi',
                'email' => 'kaprodi@example.com',
                'password' => Hash::make('password'),
                'role' => 'kaprodi',
                'nim' => 'K001',
                'prodi' => 'Teknik Informatika',
            ]
        );

        // Akun Kemahasiswaan
        User::updateOrCreate(
            ['email' => 'kemahasiswaan@example.com'],
            [
                'name' => 'Kemahasiswaan',
                'email' => 'kemahasiswaan@example.com',
                'password' => Hash::make('password'),
                'role' => 'kemahasiswaan',
                'nim' => 'K002',
                'prodi' => 'Teknik Informatika',
            ]
        );

        // Akun Dosen
        User::updateOrCreate(
            ['email' => 'dosen@example.com'],
            [
                'name' => 'Dosen',
                'email' => 'dosen@example.com',
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'nim' => 'D001',
                'prodi' => 'Teknik Informatika',
            ]
        );

        // Akun Mahasiswa
        User::updateOrCreate(
            ['email' => 'mahasiswa@example.com'],
            [
                'name' => 'Mahasiswa',
                'nim' => '12345678',
                'prodi' => 'Teknik Informatika',
                'email' => 'mahasiswa@example.com',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ]
        );

        // Akun Test User
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'nim' => 'T001',
                'prodi' => 'Teknik Informatika',
            ]
        );
    }
} 