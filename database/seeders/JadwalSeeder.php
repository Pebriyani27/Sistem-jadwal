<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwals = [
            [
                'hari' => 'Senin',
                'jam' => '08:00',
                'matakuliah' => 'Pemrograman Dasar',
                'dosen' => 'Dr. Ahmad',
                'ruangan' => 'Lab 1',
            ],
            [
                'hari' => 'Senin',
                'jam' => '10:00',
                'matakuliah' => 'Algoritma dan Struktur Data',
                'dosen' => 'Dr. Budi',
                'ruangan' => 'Lab 2',
            ],
            [
                'hari' => 'Selasa',
                'jam' => '08:00',
                'matakuliah' => 'Basis Data',
                'dosen' => 'Dr. Citra',
                'ruangan' => 'Lab 3',
            ],
            [
                'hari' => 'Selasa',
                'jam' => '10:00',
                'matakuliah' => 'Pemrograman Web',
                'dosen' => 'Dr. Deni',
                'ruangan' => 'Lab 1',
            ],
            [
                'hari' => 'Rabu',
                'jam' => '08:00',
                'matakuliah' => 'Jaringan Komputer',
                'dosen' => 'Dr. Eko',
                'ruangan' => 'Lab 2',
            ],
            [
                'hari' => 'Rabu',
                'jam' => '10:00',
                'matakuliah' => 'Pemrograman Mobile',
                'dosen' => 'Dr. Fitri',
                'ruangan' => 'Lab 3',
            ],
            [
                'hari' => 'Kamis',
                'jam' => '08:00',
                'matakuliah' => 'Kecerdasan Buatan',
                'dosen' => 'Dr. Gita',
                'ruangan' => 'Lab 1',
            ],
            [
                'hari' => 'Kamis',
                'jam' => '10:00',
                'matakuliah' => 'Sistem Operasi',
                'dosen' => 'Dr. Hadi',
                'ruangan' => 'Lab 2',
            ],
            [
                'hari' => 'Jumat',
                'jam' => '08:00',
                'matakuliah' => 'Pemrograman Dasar',
                'dosen' => 'Dr. Ahmad',
                'ruangan' => 'Lab 3',
            ],
            [
                'hari' => 'Jumat',
                'jam' => '10:00',
                'matakuliah' => 'Basis Data',
                'dosen' => 'Dr. Citra',
                'ruangan' => 'Lab 1',
            ],
        ];

        foreach ($jadwals as $jadwal) {
            Jadwal::updateOrCreate(
                [
                    'hari' => $jadwal['hari'],
                    'jam' => $jadwal['jam'],
                    'matakuliah' => $jadwal['matakuliah'],
                ],
                $jadwal
            );
        }
    }
} 