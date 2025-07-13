<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matakuliahs = [
            [
                'kode' => 'IF101',
                'nama' => 'Pemrograman Dasar',
                'sks' => 3,
            ],
            [
                'kode' => 'IF102',
                'nama' => 'Algoritma dan Struktur Data',
                'sks' => 4,
            ],
            [
                'kode' => 'IF103',
                'nama' => 'Basis Data',
                'sks' => 3,
            ],
            [
                'kode' => 'IF104',
                'nama' => 'Pemrograman Web',
                'sks' => 3,
            ],
            [
                'kode' => 'IF105',
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
            ],
            [
                'kode' => 'IF106',
                'nama' => 'Pemrograman Mobile',
                'sks' => 3,
            ],
            [
                'kode' => 'IF107',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 3,
            ],
            [
                'kode' => 'IF108',
                'nama' => 'Sistem Operasi',
                'sks' => 3,
            ],
        ];

        foreach ($matakuliahs as $matakuliah) {
            Matakuliah::updateOrCreate(
                ['kode' => $matakuliah['kode']],
                $matakuliah
            );
        }
    }
} 